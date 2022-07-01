<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Storage::exists("public/images")) {
            Storage::makeDirectory("public/images");
        }

        $products =
             [
                [
                    'name' => 'Sulam Alis & Retouch 1x',
                    'description' => 'Type dan warna sesuai dengan keinginan',
                    'price' => '1500000',
                    'picture'  => 'foto.jpg',
                    'stock'  => '8',
                    'category_product_id' => '1',
                ],
                [
                    'name' => 'Cream Malam',
                    'description' => 'Cream malam ini membantu mencerahkan wajah',
                    'price' => '70000',
                    'discount' => 10,
                    'picture'  => 'foto3.jpg',
                    'stock'  => '40',
                    'category_product_id' => '2',
                ],
                [
                    'name' => 'Brow Henna',
                    'description' => 'Cream malam ini membantu mencerahkan wajah',
                    'price' => '60000',
                    'picture'  => 'foto2.jpg',
                    'stock'  => '5',
                    'category_product_id' => '3',
                ],
              ];


        foreach ($products as $row) {
            Product::create($row);
        }
    }
}
