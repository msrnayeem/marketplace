<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'order_id',
        'gig_id',
        'gig_package_id',
        'buyer_id',
        'seller_id',
        'amount',
        'delivery_date',
        'status',
    ];
    public function getDeliveryDateAttribute($value)
    {
        // Format the date as dd-month/year (01-January/2023)
        return date('d-M-Y', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        // Format the date as dd-month/year (01-January/2023)
        return date('d-M-Y', strtotime($value));
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }


}
