<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'product_id',
        'date',
        'qty',
        'subtotal',
        'no_invoice',

    ];

    // protected $with = [
    //     'BookingAcademy',
    //     'BookingTreatment',
    //     'BookingProduct',
    // ];
    public function Customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function Products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    // public function BookingProduct(){
    //     return $this->belongsTo(BookingProduct::class, 'booking_product_id');
    // }
}
