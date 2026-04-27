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
        Schema::create('blogs', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('image');
    $table->string('date'); // e.g., March 10, 2026
    $table->string('read_time'); // e.g., 4 min read
    $table->string('slug')->unique(); // Blog ka link banane ke liye
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
