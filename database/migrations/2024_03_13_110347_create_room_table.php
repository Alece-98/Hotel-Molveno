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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('room_number');
            $table->integer('floor');
            $table->string('room_view');
            $table->string('room_type');
            $table->boolean('handicap_accessible');
            $table->boolean('baby_bed');
            $table->integer('price_per_night');
            $table->integer('room_capacity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
