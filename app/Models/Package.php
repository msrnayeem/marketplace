<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function gigPackages()
    {
        return $this->hasMany(GigPackage::class);
    }
}