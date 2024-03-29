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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('gym_courses');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('timing_id')->nullable()->constrained('timings')->onDelete('set null');
            $table->boolean('booked')->default(false);
            $table->boolean('pending')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

