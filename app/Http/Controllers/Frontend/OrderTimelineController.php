<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderTimeline;
use App\Http\Requests\StoreOrderTimelineRequest;
use App\Http\Requests\UpdateOrderTimelineRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderTimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderTimelineRequest $request)
    {

        $order_id = $request->order_id;
        $status_id = $request->timeline_status_id;

        if ($status_id == 4 || 5 || 8) {
            $order = Order::find($order_id);
            if ($order_id == 4) {
                $order->status = 'cancelled';
            }
            if ($order_id == 5) {
                $order->status = 'completed';
            }
            if ($order_id == 8) {
                $order->status = 'dispute';
            }

            $order->save();
        }

        if ($request->hasFile('file')) {
            $uploadedFile = $request->file('file');
            if ($uploadedFile->isValid()) {
                // Generate a new file name
                $newFileName = 'requirement-' . $request->order_id . '-' . now()->format('YmdHis') . '.' . $uploadedFile->getClientOriginalExtension();

                // Store the file in the public disk (storage/app/public/requirement directory)
                $filePath = $uploadedFile->storeAs('public/requirement', $newFileName);

                // Get the full public URL to the stored file
                $fileUrl = asset('storage/requirement/' . $newFileName);
            }
        }

        $orderTimeline = OrderTimeline::create([
            'order_id' => $order_id,
            'timeline_status_id' => $status_id,
            'changed_by' => auth()->user()->id,
            'file' => $fileUrl ?? null,
        ]);



        return redirect()->back()->with('success', 'Order timeline updated successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show($order_detail)
    {
        if ($order_detail == null) {
            return redirect()->back()->with('error', 'Order not found');
        }
        if (!Auth::check()) {
            //redirect to login route
            return redirect()->route('login');
        }
        $order = Order::where('order_id', $order_detail)->firstOrFail();

        $order_id = $order->id;

        if ($order !== null && $order->buyer_id == auth()->user()->id || $order->seller_id == auth()->user()->id) {
            $timelines = OrderTimeline::where('order_id', $order->id)
                ->with('changedBy', 'timelineStatus')
                ->orderBy('created_at', 'asc')
                ->get()
                ->groupBy(function ($date) {
                    return Carbon::parse($date->created_at)->format('d-m-Y');
                })
                ->map(function ($timelineGroup) {
                    return $timelineGroup->groupBy('timelineStatus.name');
                });


        } else {
            return redirect()->back()->with('error', 'You are not authorized to view this order timeline');
        }

        $StatusId = OrderTimeline::where('order_id', $order->id)->orderBy('created_at', 'desc')->first()->timeline_status_id;

        if ($order->seller_id == Auth::user()->id) {
            return view('frontend.pages.order-timeline-seller', compact('timelines', 'order_id', 'StatusId'));
        } else {
            return view('frontend.pages.order-timeline-buyer', compact('timelines', 'order_id', 'StatusId'));
        }

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderTimeline $orderTimeline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderTimelineRequest $request, OrderTimeline $orderTimeline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderTimeline $orderTimeline)
    {
        //
    }
}