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
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->datetime('date_start');
            $table->datetime('date_end');
            $table->string('reserving_guest_id')->foreign();
            $table->boolean('has_breakfast');
            $table->timestamp('last_update');
            //Guests and comments are in their respective link tables
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
