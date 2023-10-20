<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table = "personal_infos";

    protected $fillable = [
        'user_id',
        'full_name',
        'description',
        'languages',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
