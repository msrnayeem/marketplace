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
        //
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
