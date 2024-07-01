<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory()->count(10)->create();

        $orders = Order::all();
        $cart = Cart::all();

        $orders->each(function (Order $order) use ($cart)
        {
            $order->products()->attach($cart->random()->id);
        });
    }
}
