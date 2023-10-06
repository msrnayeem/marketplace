<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderTimeline extends Model
{
    protected $fillable = [
        'order_id',
        'timeline_status_id',
        'file'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function seller()
    {
        return $this->hasOneThrough(User::class, Order::class, 'id', 'id', 'order_id', 'seller_id');
    }

    public function buyer()
    {
        return $this->hasOneThrough(User::class, Order::class, 'id', 'id', 'order_id', 'buyer_id');
    }

    public function timelineStatus()
    {
        return $this->belongsTo(TimelineStatus::class);
    }
}
