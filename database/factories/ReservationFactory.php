<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReservationTask>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $capacity = 4;
        $adults = fake()->numberBetween(1, 4);
        $children = fake()->numberBetween(0, $capacity - $adults);
        $arrivalDate = fake()->dateTimeInInterval('-4 weeks', '+6 months');
        $departureDate = fake()->dateTimeInInterval($arrivalDate, '+3 weeks');
        $roomID = fake()->numberBetween(1, 25);

        return [
            'adults' => fake()->numberBetween(1, $adults),
            'children' => fake()->numberBetween(0, $children),
            'arrival' => $arrivalDate,
            'departure' => $departureDate,
            'room_id' => $roomID,
        ];
    }


                                     
}
