<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfessionalInfo extends Model
{
    protected $table = "professional_infos";
    protected $fillable = ["user_id", "profession", "skills", "education",];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
