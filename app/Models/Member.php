<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'discount_id',

    ];


    // public function CategoryMembers(){
    //     return $this->belongsTo(CategoryMembers::class);
    // }
    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Discounts(){
        return $this->belongsTo(Discount::class,'dsicount_id');
    }
}
