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
        Schema::create('extra_guests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('extra_first_name');
            $table->string('extra_last_name');
            $table->string('extra_phone');
            $table->string('extra_email');
            $table->string('extra_adress');
            $table->integer('extra_house_number');
            $table->string('extra_city');
            $table->string('extra_zipcode');
            $table->string('extra_country');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_guests');
    }
};
