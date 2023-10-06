<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimelineStatus extends Model
{
    //timestamps null
    public $timestamps = false;

    public function orderTimelines()
    {
        return $this->hasMany(OrderTimeline::class);
    }
}