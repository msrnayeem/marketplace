<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $a = [
            'Logo & Brand Identity',
            'Web & App Design',
            'Art & Illustration',
            'Visual Design',
            '3D Design'
        ];

        $b = [
            'Website Development',
            'Website Platforms',
            'Application Development',
            'Miscellaneous 1',
        ];

        $c = [
            'Search',
            'Social',
            'Methods & Techniques',
            'Industry & Purpose-Specific',
        ];

        $d = ['Editing & Post-Production', 'Animation', 'Social & Marketing Videos', 'Miscellaneous 2'];

        $e = [
            'Content Writing',
            'Translation & Transcription',
            'Business & Marketing Copy',
            'Career Writing',
            'Miscellaneous 3'
        ];

        $f = [
            'Music Production & Writing',
            'Audio Engineering & Post Production',
            'Voice Over & Streaming',
            'Lessons & Transcription',
            'Sound Design'
        ];

        $g = [
            'Business Formation',
            'General & Administrative',
            'Legal Services',
            'Accounting & Finance',
            'Sales & Customer Care',
            'Miscellaneous 4'
        ];

        $h = ['Data Science & ML', 'Data Collection', 'Data Analysis', 'Data Management'];

        $i = ['Product', 'People', 'Scenes', 'Miscellaneous 5'];

        $j = ['AI Development', 'Data', 'Content', 'Generative AI'];

        foreach ($a as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 1,
            ]);
        }

        foreach ($b as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 2,
            ]);
        }

        foreach ($c as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 3,
            ]);
        }

        foreach ($d as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 4,
            ]);
        }

        foreach ($e as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 5,
            ]);
        }

        foreach ($f as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 6,
            ]);
        }

        foreach ($g as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 7,
            ]);
        }

        foreach ($h as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 8,
            ]);
        }

        foreach ($i as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 9,
            ]);
        }

        foreach ($j as $key => $value) {
            SubCategory::create([
                'name' => $value,
                'key' => Str::slug($value),
                'imagePath' => 'frontend/images/sub_category/' . Str::slug($value) . '.jpg',
                'category_id' => 10,
            ]);
        }

    }
}