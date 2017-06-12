<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'avatar' => 'photo.jpg',
                    'name' => str_random(10),
                    'email' => 'member@gmail.com',
                    'level' => 0,
                    'password' => bcrypt('123456'),
                ],
                [
                    'avatar' => 'photo.jpg',
                    'name' => str_random(10),
                    'email' => 'admin@gmail.com',
                    'level' => 1,
                    'password' => bcrypt('123456'),
                ],
            ]);
    }
}
