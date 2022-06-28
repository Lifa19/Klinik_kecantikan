<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'position_id',
        'name',
        'address',
        'phone',
        'dateOfBirth',
        'gender',
        'picture',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Position(){
        return $this->hasMany(Position::class);
    }
}
