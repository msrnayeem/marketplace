<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderTimeline extends Model
{
    protected $fillable = [
        'order_id',
        'timeline_status_id',
        'changed_by',
        'file'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }

    public function timelineStatus()
    {
        return $this->belongsTo(TimelineStatus::class);
    }
}