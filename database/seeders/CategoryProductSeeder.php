<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryProduct;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryproducts = [
            [
                'name' => 'Treatment',
            ],
            [
                'name' => 'Produk',
            ],
            [
                'name' => 'Academy',
            ],
          ];
          foreach ($categoryproducts as $row){
              CategoryProduct::create($row);
          }
    }
}
