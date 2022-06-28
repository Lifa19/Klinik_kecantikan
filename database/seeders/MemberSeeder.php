<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'user_id'  => '2',
                'discount_id' => '1',
                'presentase' => '2',
            ],

          ];
          foreach ($members as $row){
              Member::create($row);
          }
    }
}
