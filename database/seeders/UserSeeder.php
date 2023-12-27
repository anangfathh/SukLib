<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'gender' => 'L', // Replace with the desired gender value
            'tanggal_lahir' => '2000-01-01', // Replace with the desired date of birth
            'address' => '123 Admin Street',
            'no_telp' => '1234567890',
            // 'no_registrasi' => 1, // Set the registration number
            'status' => 'Aktif',
            'is_admin' => 1, // Set as admin
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Replace with the desired password
            // 'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Regular Member',
            'email' => 'member@example.com',
            'gender' => 'L', // Replace with the desired gender value
            'tanggal_lahir' => '1990-01-01', // Replace with the desired date of birth
            'address' => '456 Member Street',
            'no_telp' => '9876543210',
            // 'no_registrasi' => 2, // Set the registration number
            'status' => 'Aktif',
            'is_admin' => 0, // Set as a regular member
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Replace with the desired password
            // 'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
