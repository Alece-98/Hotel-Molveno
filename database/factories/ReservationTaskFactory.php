<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReservationTask>
 */
class ReservationTaskFactory extends Factory
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

        /*print($adults);
        print($children);
        print($arrivalDate->format('Y-m-d'));
        print($departureDate->format('Y-m-d'));*/

        return [
            'adults' => fake()->numberBetween(1, $adults),
            'children' => fake()->numberBetween(0, $children),
            'arrival' => $arrivalDate,
            'departure' => $departureDate,
        ];
    }


                                     
}
