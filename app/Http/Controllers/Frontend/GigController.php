<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Http\Requests\StoreGigRequest;
use App\Http\Requests\UpdateGigRequest;

class GigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gigsQuery = Gig::with(['user', 'gigPackages' => function ($query) {
            $query->orderBy('price', 'asc');
        }]);

        $gigs = $gigsQuery->paginate(4);
        
        return view('frontend.pages.gigs', compact('gigs'));
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
    public function store(StoreGigRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gig $gig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gig $gig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGigRequest $request, Gig $gig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gig $gig)
    {
        //
    }
}