<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentChannel as Channel;

class PaymentChannel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Bank BRI',
            'credential' => '7234236723647',
            'atas_nama' => 'Lifa'
        ]);
    }
}
