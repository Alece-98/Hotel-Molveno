<?php

namespace Database\Factories;

use App\Models\Guest;
use App\Models\ReservationModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Guest_ReservationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guest_id' => Guest::all()->random()->id,
            'reservation_task_id' => ReservationModel::all()->random()->id
        ];
    }
}
