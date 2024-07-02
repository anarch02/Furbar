<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'sku' => $this->faker->unique()->word,
            'information' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'colors' => $this->faker->randomElements(['red', 'green', 'blue', 'yellow', 'black'], 2),
            'tags' => $this->faker->randomElements(['new', 'hot', 'sale', 'gift', 'popular'], 2),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'images' => [
                'https://via.placeholder.com/270x303',
                'https://via.placeholder.com/270x303',
                'https://via.placeholder.com/270x303',
            ]
        ];
    }
}
