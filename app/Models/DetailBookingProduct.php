<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBookingProduct extends Model
{
    use HasFactory;
    protected $fillabe = [
        'customer_id',
        'booking_product_id',
        'day',
        'order_time',
        'payment_time',
    ];

    public function Customer(){
        return $this->hasMany(Customer::class);
    }
    public function BookingProducts(){
        return $this->hasMany(BookingProducts::class);
    }
}
