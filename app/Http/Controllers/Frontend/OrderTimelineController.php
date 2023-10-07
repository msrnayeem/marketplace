<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderTimeline;
use App\Http\Requests\StoreOrderTimelineRequest;
use App\Http\Requests\UpdateOrderTimelineRequest;
use Illuminate\Support\Carbon;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($order_detail)
    {
        $order = Order::where('order_id', $order_detail)->firstOrFail();

        $seller = false;
        if ($order->seller_id == auth()->user()->id) {
            $seller = true;
        }

        $timelines = OrderTimeline::where('order_id', $order->id)
            ->with('changedBy', 'timelineStatus')
            ->orderBy('created_at', 'asc') // You might want to order them first before grouping
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('d-m-Y');
            });

        return view('frontend.pages.order-timeline', compact('timelines', 'seller'));
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
