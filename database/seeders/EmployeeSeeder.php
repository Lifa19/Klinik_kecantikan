<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'name'         => 'Matuha',
                'address'      => 'Tenonan',
                'phone'        => '082992675112',
                'dateOfBirth'  =>  '2000-12-01',
                'gender'       => 'perempuan',
                'picture'      => 'image|mimes:jpeg,jpg,png,svg|max:2048',
                'user_id'      =>  '3',
                'position_id'  => '1',
            ],
            
        ];

        foreach ($employees as $row) {
            Employee::create($row);
        }

        
    }
}
