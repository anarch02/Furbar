<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::query()->inRandomOrder()->first();
        return [
            'client_id' => $this->faker->numberBetween(1, 10),
            'product_id' => $product->id,
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $product->price,
        ];
    }
}
