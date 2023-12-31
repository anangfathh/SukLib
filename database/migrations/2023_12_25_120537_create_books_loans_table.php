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
        Schema::create('books_loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('book_id')->references('id')->on('books')->cascadeOnDelete();
            $table->date('date_borrowed');
            $table->date('date_returned')->nullable();
            $table->date('due_date');
            $table->integer('denda');
            $table->enum('status_denda', ['Paid', 'Unpaid'])->nullable();
            $table->enum('metode_pembayaran', ['BRI', 'BNI', 'Mandiri', 'DANA', 'Tunai'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_loans');
    }
};
