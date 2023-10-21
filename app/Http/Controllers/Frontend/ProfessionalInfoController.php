<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PersonalInfo;
use App\Models\ProfessionalInfo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessionalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = Auth::user()->id;

        if (!ProfessionalInfo::where('user_id', $userId)->exists()) {
            return redirect()->route('add.gig.basic');
        }

        return redirect()->route('add.gig.basic');
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
        try {
            $skills = $request->input('skills');
            $education = $request->input('education');

            $profession = [
                'type' => $request->input('profession'),
                'fromYear' => $request->input('fromYear'),
                'toYear' => $request->input('toYear'),
            ];

            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->json('profession')->nullable();
            // $table->json('skills')->nullable();
            // $table->json('education')->nullable();

            $formattedData = [
                'user_id' => Auth::user()->id,
                'profession' => json_encode($profession),
                'skills' => json_encode($skills),
                'education' => json_encode($education),
            ];
            $professionalInfo = ProfessionalInfo::create($formattedData);

            // Check if the record was successfully created
            if ($professionalInfo) {

                //update in user table, is_seller
                $user = Auth::user();
                $user->is_seller = 1;
                $user->save();

                return redirect()->route('add.gig.basic');
            } else {
                return redirect()->back()->with('error', 'Failed to save personal information. Please try again.'); // Redirect back with an error message
            }
        } catch (QueryException $e) {
            // Get the specific database error message
            $errorMessage = $e->getMessage();

            // Log the error for further investigation
            \Log::error('Database Error: ' . $errorMessage);

            // Return an error response with the specific database error message
            return redirect()->back()->with('error', 'Database Error: ' . $errorMessage);
        } catch (\Exception $e) {
            // Handle other exceptions, log the error, or return an error response
            return redirect()->back()->with('error', 'An error occurred while saving personal information.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(ProfessionalInfo $professionalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfessionalInfo $professionalInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfessionalInfo $professionalInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfessionalInfo $professionalInfo)
    {
        //
    }
}
