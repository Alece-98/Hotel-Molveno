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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number');
            $table->integer('floor');
            $table->string('view');
            $table->string('type');
            $table->boolean('handicap_accessible');
            $table->boolean('baby_bed');
            $table->integer('price_per_night');
            $table->integer('capacity');
            $table->string('bed_description');
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
