<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'member_id',
        'name',
        'address',
        'gender',
        'dateOfBirth',
        'picture',
    ];

    public function User(){
        return $this->belongsTo(Users::class);
    }
    public function Members(){
        return $this->belongsTo(Members::class);
    }


}
