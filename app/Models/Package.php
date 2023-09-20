<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function gigPackage()
    {
        return $this->hasMany(GigPackage::class);
    }
}