<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chaption>
 */
class ChaptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(fake()->numberBetween(1, 5), false),
            'desc' => fake()->sentence(fake()->numberBetween(0, 10), true)
        ];
    }
}
