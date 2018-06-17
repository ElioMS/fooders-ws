<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username'  => 'masterchef', 'email' => 'masterchef@gmail.com', 'password' => app('hash')->make(123123)],
            ['username'  => 'cliente', 'email' => 'cliente@gmail.com', 'password' => app('hash')->make(123123)]
        ]);
    }
}
