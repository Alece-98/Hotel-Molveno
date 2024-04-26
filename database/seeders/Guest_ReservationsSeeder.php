<?php

namespace Database\Seeders;

use App\Models\Guest_Reservations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Guest_ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest_Reservations::factory()->times(50)->create();
    }
}
