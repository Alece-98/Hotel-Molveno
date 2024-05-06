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
        Schema::create('guests_reservations', function (Blueprint $table) {
            $table->unsignedBigInteger("guest_id");
            $table->unsignedBigInteger("reservation_id");
            $table->foreign("guest_id")->references('id')->on('guests');
            $table->foreign("reservation_id")->references('id')->on('reservations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests_reservations');
    }
};
