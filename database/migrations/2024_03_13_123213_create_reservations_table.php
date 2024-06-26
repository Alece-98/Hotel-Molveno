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
            $table->id();
            $table->timestamps();
            $table->integer('adults')->default(0);
            $table->integer('children')->default(0);
            $table->boolean('baby_bed')->default(false);
            $table->boolean('handicap')->default(false);
            $table->boolean('has_breakfast')->default(false);
            $table->string('arrival')->default("0");
            $table->string('departure')->default("0");
            $table->string('comment')->nullable();
            $table->unsignedBigInteger('room_id')->nullable();
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
        Schema::dropIfExists('rooms');
    }
};
