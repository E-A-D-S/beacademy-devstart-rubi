<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->name(),
            'quantity' => $this->faker->numberBetween(1, 99),
            'cost_price' => $this->faker->randomFloat(2, 00.00, 99.99),
            'sale_price' => $this->faker->randomFloat(2, 00.00, 99.99),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
