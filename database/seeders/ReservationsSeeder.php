<?php

namespace Database\Seeders;

use App\Models\ReservationTask;
use Illuminate\Database\Seeder;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReservationTask::factory()->times(20)->create();
    }
}
