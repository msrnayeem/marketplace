<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{

    public function userProfile()
    {
        if (!auth()->user()) {
            return redirect()->route('login');
        }

        $id = auth()->user()->id;

        $user = Cache::remember("user_{$id}", 3600 * 24 * 7, function () use ($id) {
            return User::find($id);
        });

        $viewCacheKey = "user_profile_view_{$id}";
        if (Cache::has($viewCacheKey)) {
            return Cache::get($viewCacheKey);
        }

        $view = view('frontend.pages.auth-profile', compact('user'))->render();

        Cache::put($viewCacheKey, $view, 3600 * 24 * 7);

        return $view;
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
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}