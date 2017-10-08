<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Tsvetan",
            'email' => 'dimitrovovich@gmail.com',
            'password' => Hash::make('123456'),
            'isAdmin'  => 1
        ]);

        DB::table('users')->insert([
            'name' => "Non-Admin",
            'email' => 'non_admin@gmail.com',
            'password' => Hash::make('123456'),
            'isAdmin'  => 0
        ]);
    }
}
