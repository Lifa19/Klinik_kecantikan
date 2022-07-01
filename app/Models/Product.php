<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable = [
        'category_product_id',
        'name',
        'description',
        'price',
        'discount',
        'stock',
        'picture',
    ];


    public function CategoryProduct(){
        return $this->belongsTo(CategoryProduct::class);
    }
}
