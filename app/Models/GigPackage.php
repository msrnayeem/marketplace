<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GigPackage extends Model
{
    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }

    public static function getMinimumPricedPackagesByGigId()
    {
        return self::select('gig_id', \DB::raw('MIN(price) as min_price'))
            ->groupBy('gig_id')
            ->get();
    }
}