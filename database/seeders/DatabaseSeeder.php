<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Symfony\Component\HttpKernel\Profiler\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            PositionSeeder::class,
            EmployeeSeeder::class,
            CategoryProductSeeder::class,
            ProductSeeder::class,
            DiscountSeeder::class,
            MemberSeeder::class,
            CustomerSeeder::class,
            BasketSeeder::class,
            BookingSeeder::class,
            ProfileSeeder::class,


        ]);
    }
}
