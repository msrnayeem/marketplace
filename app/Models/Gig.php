<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{

    protected $fillable = [
        'title',
        'sub_sub_category_id',
        'user_id',
        'description',
        'status',
    ];


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
