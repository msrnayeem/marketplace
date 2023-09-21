<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Http\Requests\StoreGigRequest;
use App\Http\Requests\UpdateGigRequest;
use Illuminate\Support\Facades\Cache;

class GigController extends Controller
{
    public function index()
    {
        // Check if the rendered view is already cached
        if (Cache::has('all_gigs_view')) {
            return Cache::get('all_gigs_view');
        }

        $gigs = Cache::remember('all_gigs', 3600, function () {
            $gigsQuery = Gig::with([
                'user',
                'gigPackages' => function ($query) {
                    $query->orderBy('price', 'asc');
                }
            ]);

            return $gigsQuery->get();
        });

        // Cache the rendered view
        $view = view('frontend.pages.gigs', compact('gigs'))->render();
        Cache::put('all_gigs_view', $view, 3600);

        return $view;
    }

    /**
     * Display a listing of the resource by subSubCategoryId
     */
    public function gigsBySubSubCategory(int $subSubCategoryId)
    {

        // $cacheKey = "subsubcategory_{$subSubCategoryId}";

        // // Check if the rendered view is already cached
        // if (Cache::has($cacheKey . '_view')) {
        //     return Cache::get($cacheKey . '_view');
        // }

        // $gigs = Cache::remember($cacheKey, 3600 * 7 * 24, function () use ($subSubCategoryId) {
        //     $gigsQuery = Gig::with([
        //         'user',
        //         'gigPackages' => function ($query) {
        //             $query->orderBy('price', 'asc');
        //         }
        //     ]);

        //     return $gigsQuery->where('sub_sub_category_id', $subSubCategoryId)->paginate(4);
        // });

        // // Cache the rendered view
        // $view = view('frontend.pages.gigs', compact('gigs'))->render();
        // Cache::put($cacheKey . '_view', $view, 3600);

        // return $view;

        $gigs = Gig::with([
            'user',
            'gigPackages' => function ($query) {
                $query->orderBy('price', 'asc');
            }
        ])->where('sub_sub_category_id', $subSubCategoryId)->get();

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