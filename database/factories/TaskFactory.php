<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(2),
            'description' => fake()->text(100),
            'status' => fake()->boolean(),
        ];
    }
}
