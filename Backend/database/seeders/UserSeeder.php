<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'John',
                'lastname' => 'Doe',
                'username' => 'johndoe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane',
                'lastname' => 'Doe',
                'username' => 'janedoe',
                'email' => 'jane@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
