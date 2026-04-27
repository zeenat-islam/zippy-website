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
    Schema::table('blogs', function (Blueprint $table) {
        $table->string('cta_heading')->nullable()->after('description');
        $table->text('cta_description')->nullable()->after('cta_heading');
        $table->string('cta_image')->nullable()->after('cta_description');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
};
