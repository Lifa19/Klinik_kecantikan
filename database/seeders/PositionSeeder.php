<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position = [
            [
                'name' => 'Customer Service',
            ], 
            [
                'name' => 'Dokter',
            ], 
            [
                'name' => 'Beauty Terapist',
            ],  
            [
                'name' => 'Supervisor',
            ], 
          ];
          foreach ($position as $row){
              Position::create($row);
          }
    }
}
