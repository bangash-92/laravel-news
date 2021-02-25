
<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $role_regular_user = Role::where('name', 'user')->first();
        $role_admin_user = Role::where('name', 'admin')->first();

        $regular_user = new User();
        $regular_user->name = 'Normal User';
        $regular_user->email = 'user@test.com';
        $regular_user->password = Hash::make('user123');
        $regular_user->save();
        $regular_user->roles()->attach($role_regular_user);

        $admin_user = new User();
        $admin_user->name = 'Admin User';
        $admin_user->email = 'admin@test.com';
        $admin_user->password = Hash::make('admin123');
        $admin_user->save();
        $admin_user->roles()->attach($role_admin_user);
    }
}