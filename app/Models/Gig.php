<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    public function gigPackages()
    {
        return $this->hasMany(GigPackage::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class)->select('id', 'name', 'key', 'avatar');
    }
    public function subSubCategory()
    {
        return $this->belongsTo(SubSubCategory::class);
    }
    public function gigImages()
    {
        return $this->hasMany(GigImage::class);
    }
}