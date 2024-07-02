<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroes = [
            [
                'title' => 'New Stylish <br> Decore Furniture',
                'description' => 'Unique Furniture Style Design for Your Family',
                'link_text' => 'purchase now',
                'link' => '/',
                'image' => 'https://via.placeholder.com/707x477',
            ],
            [
                'title' => 'New Stylish <br> Decore Furniture',
                'description' => 'Unique Furniture Style Design for Your Family',
                'link_text' => 'purchase now',
                'link' => '/',
                'image' => 'https://via.placeholder.com/707x477',
            ],
            [
                'title' => 'New Stylish <br> Decore Furniture',
                'description' => 'Unique Furniture Style Design for Your Family',
                'link_text' => 'purchase now',
                'link' => '/',
                'image' => 'https://via.placeholder.com/707x477',
            ],
        ];

        foreach ($heroes as $hero) {
            \App\Models\Hero::factory()->create($hero);
        }
    }
}
