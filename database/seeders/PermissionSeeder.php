<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'employee-list',
            'employee-create',
            'employee-edit',
            'employee-delete',
            'customer-list',
            'customer-create',
            'customer-edit',
            'customer-delete',
            'member-list',
            'member-create',
            'member-edit',
            'member-delete',
            'academy-list',
            'academy-create',
            'academy-edit',
            'academy-delete',
            'treatment-list',
            'treatment-create',
            'treatment-edit',
            'treatment-delete',
            'workshop-list',
            'workshop-create',
            'workshop-edit',
            'workshop-delete',
            'women-list',
            'women-create',
            'women-edit',
            'women-delete',
            'whitening-list',
            'whitening-create',
            'whitening-edit',
            'whitening-delete',
            'wajah-list',
            'wajah-create',
            'wajah-edit',
            'wajah-delete',
            'tubuh-list',
            'tubuh-create',
            'tubuh-edit',
            'tubuh-delete',
            'sulamab-list',
            'sulamab-create',
            'sulamab-edit',
            'sulamab-delete',
            'seminar-list',
            'seminar-create',
            'seminar-edit',
            'seminar-delete',
            'privateclass-list',
            'privateclass-create',
            'privateclass-edit',
            'privateclass-delete',
            'plasma-list',
            'plasma-create',
            'plasma-edit',
            'plasma-delete',
            'hifu-list',
            'hifu-create',
            'hifu-edit',
            'hifu-delete',
            'cart-list',
            'cart-create',
            'cart-edit',
            'cart-delete',
            'booking-list',
            'booking-create',
            'booking-edit',
            'booking-delete',
            'discount-list',
            'discount-create',
            'discount-edit',
            'discount-delete',
            'profile-list',
            'profile-create',
            'profile-edit',
            'profile-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
