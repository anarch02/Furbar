<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'title' => 'About',
                'page' => 'about',
                'image' => 'https://via.placeholder.com/1920x500',
            ],
            [
                'title' => 'Contact us',
                'page' => 'contact',
                'image' => 'https://via.placeholder.com/1920x500',
            ],
            [
                'title' => 'Shop',
                'page' => 'shop',
                'image' => 'https://via.placeholder.com/1920x500',
            ],
        ];

        foreach ($banners as $banner) {
            \App\Models\Banner::create($banner);
        }
    }
}
