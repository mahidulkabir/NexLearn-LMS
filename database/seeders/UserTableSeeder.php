<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'photo' => null,
                'phone' => '123456789',
                'address' => '1234 admin street',
                'role' => 'admin',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Instructor User',
                'email' => 'instructor@example.com',
                'password' => Hash::make('password'),
                'photo' => null,
                'phone' => '64648167654',
                'address' => '456 instructor avenue',
                'role' => 'instructor',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'photo' => null,
                'phone' => '5555555555',
                'address' => '789 user lane',
                'role' => 'user',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
