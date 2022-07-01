<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    protected $table = 'booking_details';
    protected $fillable = [
        'booking_id',
        'evidence',
        'order_time',
        'payment_time',
        'payment_status'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
