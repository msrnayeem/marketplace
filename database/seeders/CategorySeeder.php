<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create categories manually

        Category::create([
            'name' => 'Graphics & Design',
            'key' => 'graphics-design',
            'imagePath' => 'frontend/images/category_banner/graphics-design.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'Programming & Tech',
            'key' => 'programming-tech',
            'imagePath' => 'frontend/images/category_banner/programming-tech.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'Digital Marketing',
            'key' => 'digital-marketing',
            'imagePath' => 'frontend/images/category_banner/digital-marketing.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'Video & Animation',
            'key' => 'video-animation',
            'imagePath' => 'frontend/images/category_banner/video-animation.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'Writing & Translation',
            'key' => 'writing-translation',
            'imagePath' => 'frontend/images/category_banner/writing-translation.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'Music & Audio',
            'key' => 'music-audio',
            'imagePath' => 'frontend/images/category_banner/music-audio.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'Business',
            'key' => 'business',
            'imagePath' => 'frontend/images/category_banner/business.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'Data',
            'key' => 'data',
            'imagePath' => 'frontend/images/category_banner/data.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'Photography',
            'key' => 'photography',
            'imagePath' => 'frontend/images/category_banner/photography.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);

        Category::create([
            'name' => 'AI Services',
            'key' => 'ai-services',
            'imagePath' => 'frontend/images/category_banner/ai-services.png',
            'caption' => 'Get a custom logo design that\'s perfect for your business. Start a design contest today.',
        ]);


    }
}