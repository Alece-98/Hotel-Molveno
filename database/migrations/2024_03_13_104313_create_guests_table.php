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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name')->default(null);
            $table->string('last_name')->default(null);
            $table->string('phone')->default(null);
            $table->string('email')->default(null);
            $table->string('street_name')->default(null);
            $table->integer('house_number')->default(0);
            $table->string('city')->default(null);
            $table->string('zipcode')->default(null);
            $table->string('country')->default(null);
// -----------------------------------------------------
//             $table->string('extra_first_name');
//             $table->string('extra_last_name');
//             $table->string('extra_phone');
//             $table->string('extra_email');
//             $table->string('extra_adress');
//             $table->integer('extra_house_number');
//             $table->string('extra_city');
//             $table->string('extra_zipcode');
//             $table->string('extra_country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
