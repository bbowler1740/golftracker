<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoundFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'score' => $this->faker->numberBetween(50, 75),
            'holes_played' => $this->faker->randomElement([6, 9, 12, 18]),
            'tee_off_time' => now(),
            'round_end_time' => now()->addHours(3),
            'has_cart' => $this->faker->boolean(),
            'is_handicap_included' => $this->faker->boolean(),
            'green_speed' => $this->faker->randomElement(['N/A', 'slow', 'medium', 'fast']),
            'comments' => $this->faker->sentence(),
            'beer_counter' => $this->faker->numberBetween(4, 24),
        ];
    }
}
