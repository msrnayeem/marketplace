<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GigImage extends Model
{
    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }
}
