<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'teacher')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->first_name = 'Admin';
        $user->last_name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);
        $user = new User();
       $user->first_name = 'Teacher';
       $user->last_name = 'Test';
       $user->email = 'teacher@example.com';
       $user->password = bcrypt('teacher');
       $user->save();
       $user->roles()->attach($role_user);
     }
}
