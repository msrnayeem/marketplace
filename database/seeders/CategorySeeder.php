<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Graphics & Design',
            'Programming & Tech',
            'Digital Marketing',
            'Video & Animation',
            'Writing & Translation',
            'Music & Audio',
            'Business',
            'Data',
            'Photography',
            'AI Services',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'key' => Str::slug($category),
                'imagePath' => 'frontend/images/category_banner/' . Str::slug($category) . '.png',
                'caption' => 'Find the best ' . $category . ' services you need to help you successfully meet your project planning goals and deadline',
            ]);
        }
    }
}