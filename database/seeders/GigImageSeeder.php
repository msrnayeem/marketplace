<?php

namespace Database\Seeders;

use App\Models\GigImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GigImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        GigImage::updateOrInsert([
            'gig_id' => 1,
            'imagePath' => 'frontend/images/sub_category/logo-brand-identity.jpg',
        ]);
        GigImage::updateOrInsert([
            'gig_id' => 1,
            'imagePath' => 'frontend/images/sub_category/logo-brand-identity.jpg',
        ]);


        GigImage::updateOrInsert([
            'gig_id' => 1,
            'imagePath' => 'frontend/images/sub_category/website-development.jpg',
        ]);
        GigImage::updateOrInsert([
            'gig_id' => 1,
            'imagePath' => 'frontend/images/sub_category/website-development.jpg',
        ]);


        GigImage::updateOrInsert([
            'gig_id' => 1,
            'imagePath' => 'frontend/images/sub_category/application-development.jpg',
        ]);
        GigImage::updateOrInsert([
            'gig_id' => 1,
            'imagePath' => 'frontend/images/sub_category/application-development.jpg',
        ]);

    }
}