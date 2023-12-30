<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookLoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books_loans')->insert([
            'user_id' => '2',
            'book_id' => '1',
            'date_borrowed' => now(),
            'due_date' => '2024-12-06',
            'denda' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books_loans')->insert([
            'user_id' => '2',
            'book_id' => '2',
            'date_borrowed' => now(),
            'due_date' => '2024-12-06',
            'denda' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books_loans')->insert([
            'user_id' => '2',
            'book_id' => '3',
            'date_borrowed' => now(),
            'due_date' => '2024-12-06',
            'denda' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books_loans')->insert([
            'user_id' => '2',
            'book_id' => '4',
            'date_borrowed' => now(),
            'due_date' => '2024-12-06',
            'denda' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
