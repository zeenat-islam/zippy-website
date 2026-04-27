<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('badge_title')->nullable()->after('slug');
            $table->string('main_heading')->nullable()->after('badge_title');
            $table->text('description')->nullable()->after('main_heading');
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['badge_title', 'main_heading', 'description']);
        });
    }
};