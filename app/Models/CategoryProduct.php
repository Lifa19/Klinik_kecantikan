<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $table = 'category_products';
    protected $fillabe =[
        'name',
    ];

    public function Products(){
        return $this->hasMany(Product::class, 'category_product_id');
    }
}
