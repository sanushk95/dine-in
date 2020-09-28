<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('roles')->truncate();

        // $this->call(UsersTableSeeder::class);
        Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'author'
        ]);
        Role::create([
            'name' => 'user'
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('test12345'),
            'role' => 1
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => bcrypt('test12345'),
        ]);
    
        $this->call([
            DishCategorySeeder::class,
            DishesSeeder::class
        ]);
    }
}
