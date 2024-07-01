<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory()->count(10)->create();

        $clients = Client::all();
        $products = Product::all();

        $clients->each(function (Client $client) use ($products)
        {
            $client->wishes()->attach($products->random()->id);
        });
    }
}
