<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            
                'name' => 'ElWady Feed',
                'email' => 'admin@elwady-feed.com',
                'password'=> bcrypt('adminpassword')
            
        ]);
    }
}
