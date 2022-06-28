<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Discount;


class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discounts = [
            [
                'product_id'  => '2',
                'presentase' => '50%',
                'description' => 'coba',
                'stock' => '2',

            ],

          ];
          foreach ($discounts as $row){
              Discount::create($row);
          }
    }
}
