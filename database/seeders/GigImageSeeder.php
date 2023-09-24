<?php

namespace Database\Seeders;

use App\Models\GigImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GigImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'gig_id' => 1,
                'imagePath' => 'frontend/images/gigs/logo-1.png',
            ],
            [
                'gig_id' => 1,
                'imagePath' => 'frontend/images/gigs/logo-2.png',
            ],
            [
                'gig_id' => 1,
                'imagePath' => 'frontend/images/gigs/logo-3.png',
            ],
            [
                'gig_id' => 4,
                'imagePath' => 'frontend/images/gigs/logo-4.png',
            ],
            [
                'gig_id' => 4,
                'imagePath' => 'frontend/images/gigs/logo-5.png',
            ],
            [
                'gig_id' => 4,
                'imagePath' => 'frontend/images/gigs/logo-6.png',
            ],
            [
                'gig_id' => 2,
                'imagePath' => 'frontend/images/gigs/website-1.png',
            ],
            [
                'gig_id' => 2,
                'imagePath' => 'frontend/images/gigs/website-2.png',
            ],
            [
                'gig_id' => 2,
                'imagePath' => 'frontend/images/gigs/website-3.png',
            ],
            [
                'gig_id' => 3,
                'imagePath' => 'frontend/images/gigs/website-3.png',
            ],
            [
                'gig_id' => 6,
                'imagePath' => 'frontend/images/gigs/website-2.png',
            ],
            [
                'gig_id' => 6,
                'imagePath' => 'frontend/images/gigs/website-3.png',
            ],
            [
                'gig_id' => 3,
                'imagePath' => 'frontend/images/gigs/website-3.png',
            ],
        ];

        // Insert the data into the gig_images table
        DB::table('gig_images')->insert($data);

    }
}