<?php

use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\GigController;
use App\Http\Controllers\Frontend\GigImageController;
use App\Http\Controllers\Frontend\GigPackageController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\NotificationController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProfessionalInfoController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\OrderTimelineController;
use App\Http\Controllers\Frontend\PersonalInfoController;
use App\Http\Controllers\Frontend\SubCategoryController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__ . '/auth.php';

// Social authentication routes
Route::get('/auth/google/redirect', [SocialAuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/auth/facebook/redirect', [SocialAuthController::class, 'redirectToFacebook'])->name('facebook.redirect');
Route::get('/auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback'])->name('facebook.callback');

// Frontend routes
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/privacy-policy', [IndexController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-of-services', [IndexController::class, 'termsOfServices'])->name('terms.of.services');

// Category and Subcategory routes
Route::resource('categories', CategoryController::class);
Route::get('/get-sub-categories/{categoryId}', [SubCategoryController::class, 'show'])->name('get.sub.categories');

// Gig routes
Route::resource('gigs', GigController::class);
Route::get('/add-gig-basic', [GigController::class, 'addGigBasic'])->name('add.gig.basic');
Route::resource('gig-images', GigImageController::class);
Route::resource('gig-packages', GigPackageController::class);
Route::get('/create-packages/{gig_id}', [GigPackageController::class, 'create'])->name('gig.packages');
Route::get('/add-gig-image/{id}', [GigImageController::class, 'addImageToGig'])->name('add.gig.image');
Route::get('/gigsby/{subSubCategoryId}', [GigController::class, 'gigsBySubSubCategory'])->name('gigs.subSubCategory');

// Order routes
Route::resource('orders', OrderController::class);
Route::resource('order-details', OrderTimelineController::class);

// User routes
Route::resource('users', UserController::class);
Route::get('/my_profile/{rollout?}', [UserController::class, 'userProfile'])->name('user.profile');
Route::resource('personal-info', PersonalInfoController::class);
Route::resource('professional-info', ProfessionalInfoController::class);
Route::get('become-seller', [PersonalInfoController::class, 'becomeSeller'])->name('become.seller');
Route::get('/seller-dashboard', [UserDashboardController::class, 'index'])->name('seller.dashboard');

// Notification routes
Route::get('/mark-as-read', [NotificationController::class, 'markAllRead'])->name('clear.notifications');
Route::get('/notification-read/{notification}', [NotificationController::class, 'singleNotificationRead'])->name('single.notification.read');
