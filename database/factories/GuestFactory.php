<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->word(),
            'last_name' => $this->faker->word(),
            'phone' => $this->faker->numberBetween(111111111,9999999999),
            'email' => $this->faker->email(),
            'street_name' => $this->faker-> words(2, true),
            'house_number' => $this->faker->numberBetween(0,999),
            'city' => $this->faker->word(),
            'zipcode' => $this->faker->numberBetween(1111,9999),
            'country' => $this->faker->word(),
        ];
    }
}
