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
        Schema::table('users', function (Blueprint $table) {
            // Add phone and role columns
            $table->string('phone')->nullable()->after('email');
            $table->string('role')->default('user')->after('password');

            // Remove address, city, country, postal, about columns
            $table->dropColumn(['address', 'city', 'country', 'postal', 'about']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add address, city, country, postal, about columns
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postal')->nullable();
            $table->text('about')->nullable();

            // Remove phone and role columns
            $table->dropColumn(['phone', 'role']);
        });
    
    }
};
