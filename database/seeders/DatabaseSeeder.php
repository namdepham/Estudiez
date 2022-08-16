<?php

namespace Database\Seeders;

use App\Constants\AdminType;
use App\Constants\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Admin 1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('admin123'),
                'phonenumber' => '0989551024',
                'type'=> AdminType::TEACHER
            ]
        ]);
        DB::table('admins')->insert([
            [
                'name' => 'Admin 2',
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('admin123'),
                'phonenumber' => '0989551024',
                'type'=> AdminType::SUPER_ADMIN
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'User 1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('admin123'),
                'type' => UserType::STUDENT
            ]
        ]);
        DB::table('users')->insert([
            [
                'name' => 'User 2',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('admin123'),
                'type' => UserType::PARENT
            ]
        ]);
    }
}
