<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Models\GigPackage;
use App\Http\Requests\StoreGigPackageRequest;
use App\Http\Requests\UpdateGigPackageRequest;
use Auth;

class GigPackageController extends Controller
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
    public function create($gig_id)
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $gig = Gig::findOrFail($gig_id);

        if ($gig->user_id != auth()->user()->id) {
            abort(403);
        }

        $package = GigPackage::where('gig_id', $gig_id)->first();

        if ($package) {
            return redirect()->back()->with('error', 'You have already added a package to this gig!');
        }
        return view('frontend.pages.gigs.add-gig-package', compact('gig_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGigPackageRequest $request)
    {
        $gig_id = $request->gig_id;
        $basicPrice = $request->basic_price;
        $basicTime = $request->basic_time;
        $basic_desc = json_encode($request->basic_desc);

        $gigPackage_1 = GigPackage::create([
            'gig_id' => $gig_id,
            'package_id' => 1,
            'delivery_time' => $basicTime,
            'description' => $basic_desc,
            'price' => $basicPrice,
        ]);

        $standardPrice = $request->standard_price;
        $standardTime = $request->standard_time;
        $standard_desc = json_encode($request->standard_desc);

        $gigPackage_2 = GigPackage::create([
            'gig_id' => $gig_id,
            'package_id' => 2,
            'delivery_time' => $standardTime,
            'description' => $standard_desc,
            'price' => $standardPrice,
        ]);

        $premiumPrice = $request->premium_price;
        $premiumTime = $request->premium_time;
        $premium_desc = json_encode($request->premium_desc);

        $gigPackage_3 = GigPackage::create([
            'gig_id' => $gig_id,
            'package_id' => 3,
            'delivery_time' => $premiumTime,
            'description' => $premium_desc,
            'price' => $premiumPrice,
        ]);

        if ($gigPackage_1 && $gigPackage_2 && $gigPackage_3) {

            $user = Auth::user();
            $user->is_seller = 1;
            $user->save();

            return redirect()->route('user.profile')->with('success', 'Gig Added Successfully!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GigPackage $gigPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GigPackage $gigPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGigPackageRequest $request, GigPackage $gigPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GigPackage $gigPackage)
    {
        //
    }
}
