<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToFacebook()
    {
        try {
            return Socialite::driver('facebook')->redirect();
        } catch (\Exception $e) {
            // Handle the exception, you can log it or return an error response.
            return redirect()->route('login')->with('error', 'Failed to redirect to Google');
        }

    }
    public function redirectToGoogle()
    {
        try {
            return Socialite::driver('google')->redirect();
        } catch (\Exception $e) {
            // Handle the exception, you can log it or return an error response.
            return redirect()->route('login')->with('error', 'Failed to redirect to Google');
        }
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            // Handle the exception, you can log it or return an error response.
            return redirect()->route('login')->with('error', 'Failed to login with Google');
        }

        // Check if the user already exists based on Google ID
        $existingUser = User::where('google_id', $user->id)->first();

        if ($existingUser) {
            Auth::login($existingUser, true);
            return redirect()->route('dashboard');
        }

        // Generate a random password for the new user
        $randomPassword = Str::random(12);

        $new_user = User::updateOrCreate(
            [
                'email' => $user->email,
            ],
            [
                'name' => $user->name,
                'google_id' => $user->id,
                'password' => bcrypt($randomPassword),
                'email_verified_at' => now(),
            ]
        );

        Auth::login($new_user, true);

        return redirect()->route('dashboard');
    }

    public function handleFacebookCallback(Request $request)
    {
        try {
            $user = Socialite::driver('facebook')->stateless()->user();
        } catch (\Exception $e) {
            // Handle the exception, you can log it or return an error response.
            return redirect()->route('login')->with('error', 'Failed to login with Facebook');
        }

        // Check if the user already exists based on Facebook ID
        $existingUser = User::where('facebook_id', $user->id)->first();

        if ($existingUser) {
            Auth::login($existingUser, true);
            return redirect()->route('dashboard');
        }

        // Check if the user already exists based on email
        $email_check = User::where('email', $user->email)->first();
        if ($email_check) {
            Auth::login($email_check, true);
            return redirect()->route('dashboard');
        }

        // Generate a random password for the new user
        $randomPassword = Str::random(12);

        $new_user = User::updateOrCreate(
            [
                'email' => $user->email,
            ],
            [
                'name' => $user->name,
                'facebook_id' => $user->id,
                'password' => bcrypt($randomPassword),
                'email_verified_at' => now(),
            ]
        );

        Auth::login($new_user, true);

        return redirect()->route('dashboard');
    }
}