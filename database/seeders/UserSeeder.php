<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'id' => 1,
                'name' => 'User Satu',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'phone_number' => '081234567890',
                'date_of_birth' => '2000-01-01',
                'profile_picture' => 'profile1.png',
            ],
            [
                'id' => 2,
                'name' => 'User Dua',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'phone_number' => '082345678901',
                'date_of_birth' => '2001-02-02',
                'profile_picture' => 'profile2.png',
            ],
            [
                'id' => 3,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'phone_number' => '083456789012',
                'date_of_birth' => '1990-03-03',
                'profile_picture' => 'admin.png',
            ],
        ]);
    }
}
