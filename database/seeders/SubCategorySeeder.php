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
        $subCategoriesData = [
            // Category 1
            ['Logo & Brand Identity', 'Web & App Design', 'Art & Illustration', 'Visual Design', '3D Design'],
            // Category 2
            ['Website Development', 'Website Platforms', 'Application Development', 'Miscellaneous 1'],
            // Category 3
            ['Search', 'Social', 'Methods & Techniques', 'Industry & Purpose-Specific'],
            // Category 4
            ['Editing & Post-Production', 'Animation', 'Social & Marketing Videos', 'Miscellaneous 2'],
            // Category 5
            ['Content Writing', 'Translation & Transcription', 'Business & Marketing Copy', 'Career Writing', 'Miscellaneous 3'],
            // Category 6
            ['Music Production & Writing', 'Audio Engineering & Post Production', 'Voice Over & Streaming', 'Lessons & Transcription', 'Sound Design'],
            // Category 7
            ['Business Formation', 'General & Administrative', 'Legal Services', 'Accounting & Finance', 'Sales & Customer Care', 'Miscellaneous 4'],
            // Category 8
            ['Data Science & ML', 'Data Collection', 'Data Analysis', 'Data Management'],
            // Category 9
            ['Product', 'People', 'Scenes', 'Miscellaneous 5'],
            // Category 10
            ['AI Development', 'Data', 'Content', 'Generative AI'],
        ];
        $categoryid = 1;
        foreach ($subCategoriesData as $categoryId => $subCategoryNames) {
            foreach ($subCategoryNames as $subCategoryName) {
                SubCategory::create([
                    'name' => $subCategoryName,
                    'key' => Str::slug($subCategoryName),
                    'imagePath' => 'frontend/images/sub_category/' . Str::slug($subCategoryName) . '.jpg',
                    'category_id' => $categoryid, // Category IDs start from 1
                ]);
            }
            $categoryid++;
        }
        
       

    }
}