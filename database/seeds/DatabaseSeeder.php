<?php

use App\User;
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
        User::insert([
            'name' => 'Muhammad Yusuf',
            'email' => 'yusufmarsudien10@gmail.com',
            'password' => bcrypt('123456'),
            'roles' => 'ADMIN',
            'username' => 'admin'
        ]);
    }
}
