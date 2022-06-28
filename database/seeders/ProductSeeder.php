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
                    'name' => 'Cream Pagi',
                    'description' => 'Cream pagi ini membantu mencerahkan wajah',
                    'price' => '80000',
                    'picture'  => 'foto.jpg',
                    'stock'  => '9',
                    'category_product_id' => '1',
                ],
                [
                    'name' => 'Cream Malam',
                    'description' => 'Cream malam ini membantu mencerahkan wajah',
                    'price' => '70000',
                    'picture'  => 'foto3.jpg',
                    'stock'  => '8',
                    'category_product_id' => '2',
                ],
                [
                    'name' => 'Toner',
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
