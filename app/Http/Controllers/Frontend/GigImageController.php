<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Models\GigImage;
use App\Http\Requests\StoreGigImageRequest;
use App\Http\Requests\UpdateGigImageRequest;
use Auth;
use Illuminate\Support\Str;

class GigImageController extends Controller
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
    public function addImageToGig($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $gig = Gig::findOrFail($id);
        if ($gig->user_id != auth()->user()->id) {
            abort(403);
        }

        $image = GigImage::where('gig_id', $id)->first();

        if ($image) {
            return redirect()->back()->with('error', 'You have already added an image to this gig!');
        }

        return view('frontend.pages.gigs.add-gig-image', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGigImageRequest $request)
    {
        if (!$request->validated()) {
            // Validation failed, redirect back with errors and old input
            return redirect()->back()->withErrors($request->errors())->withInput();
        }

        $validatedData = $request->validated();
        $fileUrls = [];
        $gigId = $request->gig_id;
        // Check if the request has 'images' key and it's an array
        if (isset($validatedData['images']) && is_array($validatedData['images'])) {
            foreach ($validatedData['images'] as $image) {
                $uploadedFile = $image; // Assuming $image contains the uploaded file instance
                $extension = $uploadedFile->getClientOriginalExtension();
                $uniqueFileName = time() . '_' . uniqid() . '.' . $extension; // Unique file name

                $filePath = $uploadedFile->storeAs('public/gigs', $uniqueFileName);
                $fileUrl = asset('storage/gigs/' . $uniqueFileName);

                // Store the file URL
                $fileUrls[] = $fileUrl;
            }
        }

        foreach ($fileUrls as $image) {
            GigImage::create([
                'gig_id' => $gigId,
                'imagePath' => $image,
            ]);
        }

        return redirect()->route('gig.packages', ['gig_id' => $gigId]);

    }

    /**
     * Display the specified resource.
     */
    public function show(GigImage $gigImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GigImage $gigImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGigImageRequest $request, GigImage $gigImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GigImage $gigImage)
    {
        //
    }
}
