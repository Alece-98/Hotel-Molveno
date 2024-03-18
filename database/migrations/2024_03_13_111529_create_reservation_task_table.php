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
        Schema::create('reservation_task', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('adults');
            $table->integer('children');
            $table->string('room_type');
            $table->string('room_view');
            $table->boolean('baby_bed');
            $table->boolean('handicap');
            $table->date('arrival');
            $table->date('departure');
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_task');
    }
};
