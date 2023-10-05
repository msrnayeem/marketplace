<?php

use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\GigController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//FOR GOOGLE AUTH
Route::get('/auth/google/redirect', [SocialAuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])->name('google.callback');

//FOR FACEBOOK AUTH
Route::get('/auth/facebook/redirect', [SocialAuthController::class, 'redirectToFacebook'])->name('facebook.redirect');
Route::get('/auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback'])->name('facebook.callback');

//FRONTEND ROUTES
Route::get('/', [IndexController::class, 'index'])->name('home');

//privacy policy
Route::get('/privacy-policy', [IndexController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-of-services', [IndexController::class, 'termsOfServices'])->name('terms.of.services');

//Category resource route
Route::resource('categories', CategoryController::class);
//GIGs
Route::resource('gigs', GigController::class);
Route::get('/gigsby/{subSubCategoryId}', [GigController::class, 'gigsBySubSubCategory'])->name('gigs.subSubCategory');

//Orders
Route::resource('orders', OrderController::class);

//user routes
Route::resource('users', UserController::class);
Route::get('/my_profile/{rollout?}', [UserController::class, 'userProfile'])->name('user.profile');
Route::get('/seller-dashboard', [UserDashboardController::class, 'index'])->name('seller.dashboard');

//notifications clear
Route::get('/mark-as-read', function () {
    Auth::user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('clear.notifications');
