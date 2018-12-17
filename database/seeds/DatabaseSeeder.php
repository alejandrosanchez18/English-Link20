<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Llamar Role Seeder
        $this->call(RoleTableSeeder::class);
        // Llamar User Seeder. Teacher y Admin
        $this->call(UserTableSeeder::class);
        // Llamar User Seeder. Teacher y Admin
        $this->call(OptionsTableSeeder::class);
        // php artisan db:seed
        factory(App\User::class, 40)->create()->each(function($user) {
             $role = App\Role::where('id', 3)->first();
             $user->roles()->save($role);
        });;

        factory(App\Course::class, 5)->create();
    }
}
