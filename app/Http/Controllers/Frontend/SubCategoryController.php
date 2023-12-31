<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;

class SubCategoryController extends Controller
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
    public function store(StoreSubCategoryRequest $request)
    {
        //
    }

    public function show($categoryId)
    {
        $subCategories = SubCategory::where('category_id', $categoryId)->select('id', 'name')->get();

        if ($subCategories->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No subcategories found for the given category ID.',
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Subcategories retrieved successfully.',
            'data' => $subCategories,
        ]);
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
