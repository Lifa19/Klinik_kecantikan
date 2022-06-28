<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookingProduct;

class BookingProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookingproducts =
        [
                [
                    'total' => '1',
                    'product_id' => '1',
                    'customer_id'          => '3',
                ],
                [
                    'total' => '2',
                    'product_id' => '2',
                    'customer_id'          => '3',
                ],
                [
                    'total' => '1',
                    'product_id' => '3',
                    'customer_id'          => '3',
                ],
                ];


        foreach ($bookingproducts as $row) {
            BookingProduct::create($row);
        }
    }
}
