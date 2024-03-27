<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReservationTask;

class ReservationTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = ReservationTask::factory()->times(10)->create([
            'adults' => 2,
            'children' => 1,
            'arrival' => now(),
            'departure' => now()->addDays(7),
        ]);
        dd($models);
    }
}
