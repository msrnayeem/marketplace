<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You are not allowed to access user dashboard');
        }

        if (Auth::user()->is_seller == false) {
            return redirect()->back()->with('error', 'You are not allowed to access user dashboard');
        }

        $seller = Auth::user();
        return view('frontend.pages.seller_dashboard', compact('seller'));
    }
}