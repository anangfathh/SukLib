<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_id')->unique();
            $table->string('name');
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->text('desc');
            $table->unsignedDouble('Rating');
            $table->enum('status', ['Tersedia', 'Dipinjam', 'Kosong'])->default('Tersedia');
            $table->enum('type', ['Hard Copy', 'Soft Copy', 'Audio Book']);
            $table->foreignId('category')->references('id')->on('book_category')->cascadeOnDelete();
            $table->string('book_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
