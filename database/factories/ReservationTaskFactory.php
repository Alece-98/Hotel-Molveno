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
        return [
            'room_id' => $this->faker->numberBetween(0,26),
            'adults'=>$this->faker->numberBetween(0,5),
            'children'=>$this->faker->numberBetween(0,3),
            'room_type'=>$this->faker->randomElement(['Economy, Standard, Luxurious']),
            'room_view'=>$this->faker->randomElement(['Standard, Lake, Mountain']),
            'baby_bed'=>$this->faker->numberBetween(0,2),
            'handicap'=>$this->faker->numberBetween(0,2),
            'arrival'=>$this->faker->dateTimeInInterval('-1 year', '+1 year'),
            'departure'=>$this->faker->dateTimeInInterval('-1 year', '+1 year'),
            'comment'=>$this->faker->text(),
        ];
    }
}
