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
        return $this->belongsTo(User::class)->select('id', 'name', 'key', 'imagePath');
    }
    public function subSubCategory()
    {
        return $this->belongsTo(SubSubCategory::class);
    }
    public function gigImages()
    {
        return $this->hasMany(GigImage::class);
    }

    // public function minPrice()
    // {
    //     return $this->with([
    //         'gigPackages' => function ($query) {
    //             $query->select('gig_id', \DB::raw('MIN(price) as min_price'))
    //                 ->groupBy('gig_id');
    //         }
    //     ])
    //         ->get();
    // }

}