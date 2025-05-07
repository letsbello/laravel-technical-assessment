<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actor>
 */
class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'birth_year' => $this->faker->year(),
            'eye_color' => $this->faker->colorName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'hair_color' => $this->faker->colorName(),
            'height' => $this->faker->randomFloat(2, 1, 100),
            'mass' => $this->faker->randomFloat(2, 1, 100),
            'skin_color' => $this->faker->colorName(),
            'bio' => $this->faker->text(),
        ];
    }
}
