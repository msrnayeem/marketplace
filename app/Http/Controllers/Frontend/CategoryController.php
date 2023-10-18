<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
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
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $key)
    {

        $cacheKey = "category_{$key}_view";


        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $category = Cache::remember("category_{$key}", 3600*24*7, function () use ($key) {
            return Category::where('key', $key)->with('subCategories.subSubCategories')->first();
        });

        $view = view('frontend.pages.gigs.category', compact('category'))->render();
        Cache::put($cacheKey, $view, 3600*24*7);

        return $view;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
