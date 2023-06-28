<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'location' => $this->faker->address,
            'name' => $this->faker->company,
            'cost_of_round' => $this->faker->numberBetween(50, 150),
        ];
    }
}
