<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insurance>
 */
class InsuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'brand' => fake()->randomElement(['VW', 'GM', 'Fiat']),
            'model' => fake()->randomElement(['Brasilia', 'Corsa', 'Fusca']),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(1000,5000)
        ];
    }
}
