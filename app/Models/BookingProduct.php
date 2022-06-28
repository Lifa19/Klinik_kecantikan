<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingProduct extends Model
{
    use HasFactory;
    protected $fillabe = [
        'product_id',
        'total',

    ];
    public function Products(){
        return $this->hasMany(Products::class);
    }
    public function Booking(){
        return $this->belongsTo(Booking::class);
    }
}
