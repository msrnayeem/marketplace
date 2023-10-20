<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\PersonalInfo;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PersonalInfoController extends Controller
{


    public function becomeSeller()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $personalInfo = PersonalInfo::where('user_id', Auth::id())->first();

        if ($personalInfo == null) {
            return view('frontend.pages.profile.personal-info');
        } else {
            return redirect()->route('professional-info.index');
        }

    }

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
    public function store(Request $request)
    {
        $fileUrl = null;
        $success = true;

        // Start a database transaction
        DB::beginTransaction();

        try {
            // Store the formatted data in the database
            $formattedData = [
                'full_name' => $request->input('name'),
                'description' => $request->input('description'),
                'languages' => json_encode($request->input('language')),
                'user_id' => Auth::user()->id,
            ];

            PersonalInfo::create($formattedData);
            // Handle the uploaded image
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                $uploadedFile = $request->file('avatar');
                $newFileName = Str::slug($request->input('name')) . '.' . $uploadedFile->getClientOriginalExtension();
                $filePath = $uploadedFile->storeAs('public/avatar', $newFileName);
                $fileUrl = asset('storage/avatar/' . $newFileName);
            }



            PersonalInfo::create($formattedData);

            // Update the user avatar if an image was uploaded
            if ($fileUrl) {
                $user = User::find(Auth::user()->id);
                $user->avatar = $fileUrl;
                $user->save();
            }

            // Commit the transaction if everything is successful
            DB::commit();
        } catch (\Exception $e) {
            // Something went wrong, rollback the transaction
            DB::rollback();
            $success = false;
        }

        if ($success) {
            return redirect()->route('professional-info.index');

        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInfo $personalInfo)
    {
        //
    }
}
