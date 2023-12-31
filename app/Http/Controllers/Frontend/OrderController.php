<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Gig;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\User;
use App\Notifications\OrderCreatedNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $userId = Auth::user()->id;

        $sellings = Order::with('seller', 'gig')
            ->where(function ($query) use ($userId) {
                $query->where('seller_id', $userId);
            })
            ->get();

        $buyings = Order::with('buyer', 'gig')
            ->where(function ($query) use ($userId) {
                $query->where('buyer_id', $userId);
            })
            ->get();
        return view('frontend.pages.order.order-index', compact('sellings', 'buyings'));
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
    public function store(StoreOrderRequest $request)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return response()->json(['result' => 'Login First']);
        }

        // Get the buyer's ID
        $buyer_id = Auth::user()->id;

        // Get the input data
        $gig_id = $request->input('gig_id');
        $package_id = $request->input('package_id');

        // Find the gig with gigPackages and validate its status
        $gig = Gig::with('gigPackages')
            ->find($gig_id);
        if (!$gig) {
            return response()->json(['result' => "You can't order this gig"]);
        }
        if ($gig->status != 1) {
            return response()->json(['result' => "This gig is not approved yet"]);
        }
        if ($gig->user_id == $buyer_id) {
            return response()->json(['result' => "You can't order your own gig"]);
        }
        if ($gig->is_active == 0) {
            return response()->json(['result' => "This gig is unpublished"]);
        }

        // Find the selected package
        $package = $gig->gigPackages->find($package_id);

        if (!$package) {
            return response()->json(['result' => 'Invalid package selection']);
        }

        try {
            DB::beginTransaction();

            $order = Order::create([
                // order_id = date now + gig_id + buyer_id+price
                'order_id' => Carbon::now()->timestamp . $gig_id . $buyer_id . $package->price,
                'gig_id' => $gig_id,
                'gig_package_id' => $package_id,
                'buyer_id' => Auth::user()->id,
                'seller_id' => $gig->user_id,
                'amount' => $package->price,
                'delivery_date' => Carbon::now()->addDays($package->delivery_time),
            ]);

            // Create the order timeline
            $order->orderTimeline()->create([
                'timeline_status_id' => 1,
                'order_id' => $order->id,
                'changed_by' => Auth::user()->id,
            ]);


            // Notify the seller
            $seller = User::find($gig->user_id);
            $seller->notify(new OrderCreatedNotification($order));

            // Notify the buyer
            $buyer = Auth::user();
            $buyer->notify(new OrderCreatedNotification($order));

            DB::commit();

            return response()->json(['result' => true]);
        } catch (\Exception $e) {
            // Handle any exceptions
            DB::rollBack(); // Rollback the transaction if an exception occurs
            return response()->json(['result' => 'Database exception']);
        }


    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('frontend.pages.order.order-details', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
