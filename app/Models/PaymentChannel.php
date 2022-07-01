<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentChannel extends Model
{
    use HasFactory;

    protected $table = 'payment_channel';
    protected $fillable = [
        'name',
        'credential',
        'atas_nama'
    ];
}
