<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GigImage extends Model
{
    protected $fillable = [
        'gig_id',
        'imagePath',
    ];


    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }
}
