<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'facebook_id',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }

    public function buyerOrders()
    {
        return $this->hasMany(Order::class, 'buyer_id');
    }

    public function buyerOrdersActive()
    {
        return $this->buyerOrders()->where('status', 'active')->count() ?? 0;
    }

    public function buyerOrdersCancelled()
    {
        return $this->buyerOrders()->where('status', 'cancelled')->count() ?? 0;
    }

    public function buyerOrdersCompleted()
    {
        return $this->buyerOrders()->where('status', 'completed')->count() ?? 0;
    }

    public function sellerOrders()
    {
        return $this->hasMany(Order::class, 'seller_id');
    }

    public function sellerOrdersActive()
    {
        return $this->sellerOrders()->where('status', 'active')->count() ?? 0;
    }

    public function sellerOrdersCancelled()
    {
        return $this->sellerOrders()->where('status', 'cancelled')->count() ?? 0;
    }

    public function sellerOrdersCompleted()
    {
        return $this->sellerOrders()->where('status', 'completed')->count() ?? 0;
    }


    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

}