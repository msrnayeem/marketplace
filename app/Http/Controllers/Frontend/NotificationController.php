<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;

class NotificationController extends Controller
{

    public function markAllRead()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }


    public function singleNotificationRead($notification)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $notification = Auth::user()->notifications()->where('id', $notification)->first();

        if ($notification) {
            // Mark the notification as read
            $notification->markAsRead();

            // Redirect to the notification's action
            return redirect($notification->data['action']);
        } else {
            return redirect()->route('login');
        }
    }
}
