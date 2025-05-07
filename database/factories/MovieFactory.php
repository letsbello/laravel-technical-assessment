<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'opening_crawl' => $this->faker->paragraph(),
            'director' => $this->faker->name(),
            'producer' => $this->faker->name(),
            'release_date' => $this->faker->date(),
        ];
    }
}
