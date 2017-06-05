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
        DB::table('users')->insert(
            [
                [
                    'avatar' => 'photo.jpg',
                    'name' => str_random(10),
                    'email' => str_random(10).'@gmail.com',
                    'level' => 0,                    
                    'password' => bcrypt('123456'),
                ],
                [
                    'avatar' => 'photo.jpg',
                    'name' => str_random(10),
                    'email' => 'admin@gmail.com',
                    'level' => 1,                    
                    'password' => bcrypt('123456'),
                ]
            ]);
    }
}
