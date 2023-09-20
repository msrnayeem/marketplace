<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GigPackage extends Model
{
    public function package()
    {
        return $this->belongsTo(GigPackage::class);
    }

    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }
}
