<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'name'         => 'Sifa',
                'address'      => 'Tenonan',
                'phone'        => '082301777985',
                'dateOfBirth'  => '2000-12-01',
                'gender'       => 'perempuan',
                'picture'      => 'image|mimes:jpeg,jpg,png,svg|max:2048',
                'user_id'     => '2',
                'member_id'   => '1',
            ],

        ];

        foreach ($customers as $row) {
            Customer::create($row);
        }

    }
}
