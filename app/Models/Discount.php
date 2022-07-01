<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = [
        'Product_id',
        'presentase',
        'description',
        'stock',

    ];
    public function Products(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function Member(){
        return $this->hasMany(Member::class, 'discount_id');
    }
}
