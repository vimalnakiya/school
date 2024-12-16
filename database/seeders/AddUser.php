<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'create',
            'read',
            'update',
            'delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission,'guard_name'=>'web']);
        }

        $admin = Role::create(['name' => 'Admin','guard_name'=>'web']);

        $admin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@123'),
        ]);
        $admin->assignRole('Admin'); 

        $admin->givePermissionTo([
            'create',
            'read',
            'update',
            'delete',
        ]);
        $user = Role::create(['name' => 'User','guard_name'=>'web']);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user@123'),
        ]);
        $user->assignRole('User'); 
    }
}
