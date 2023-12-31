<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $faker = Factory::create();

    for ($i = 0; $i < 10; $i++) {
        $date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now');

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'gender' => $faker->randomElement(['L', 'P']),
            'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $faker->address,
            'no_telp' => $faker->phoneNumber,
            'status' => $faker->randomElement(['Aktif', 'Tidak Aktif']),
            'is_admin' => $faker->boolean,
            'email_verified_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'password' => Hash::make($faker->password),
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
}
