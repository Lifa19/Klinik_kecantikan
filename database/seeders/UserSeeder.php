<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create([
        //     'name'=>'admin'
        // ]);
        // Role::create([
        //     'name'=>'karyawan'
        // ]);

        // Role::create([
        //     'name'=>'user'
        // ]);
        // Role::create([
        //     'name'=>'pelanggan'
        // ]);

        $user = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123')
        ]);

        $role           = Role::where('name', 'admin')->first();
        $permissions    = Permission::pluck('id', 'id')->all();

        $role->givePermissionTo([$permissions]);
        $user->assignRole([$role->id]);

        $user = User::create([
            'name'=>'sifa',
            'email'=>'sifa@gmail.com',
            'password'=>bcrypt('sifa1234')
        ]);
        // $level               = Level::('');

        $role           = Role::where('name', 'pelanggan')->first();
        $permissions    = Permission::pluck('id', 'id')->all();

        $role->givePermissionTo([$permissions]);
        $user->assignRole([$role->id]);

        $user = User::create([
            'name'=>'karyawan',
            'email'=>'karyawan@gmail.com',
            'password'=>bcrypt('karyawan')
        ]);

        $role           = Role::where('name', 'karyawan')->first();
        $permissions    = Permission::pluck('id', 'id')->all();

        $role->givePermissionTo([$permissions]);
        $user->assignRole([$role->id]);
    }

}
