<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $users = [
            [
                'fullname' => 'Lucifer andrella',
                'username' => 'Lucifer',
                'no_telp' => '087729964804',
                'email' => 'admin@gmail.com',
                'role' => "admin",
                'password' => bcrypt('123456'),
            ],
            [
                'fullname' => 'Xiao Qiao',
                'username' => 'xiao',
                'no_telp' => '087758875106',
                'email' => 'seller@gmail.com',
                'role' => "seller",
                'password' => bcrypt('123456'),
            ],
            [
                'fullname' => 'Wang Lin',
                'username' => 'Lin',
                'no_telp' => '08775881058',
                'email' => 'user@gmail.com',
                'role' => "user",
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}