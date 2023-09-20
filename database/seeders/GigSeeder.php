<?php

namespace Database\Seeders;

use App\Models\Gig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ttile, user_id, sub_sub_category_id
        Gig::updateOrInsert([
            'title' => 'I will do any kind of logo design',
            'user_id' => 1,
            'sub_sub_category_id' => 1,
        ]);
        Gig::updateOrInsert([
            'title' => 'I will do any kind of website design',
            'user_id' => 2,
            'sub_sub_category_id' => 2,
        ]);
        Gig::updateOrInsert([
            'title' => 'I will do any kind of mobile app design',
            'user_id' => 3,
            'sub_sub_category_id' => 7,
        ]);

        // ttile, user_id, sub_sub_category_id
        Gig::updateOrInsert([
            'title' => 'I will do any kind of custom website',
            'user_id' => 1,
            'sub_sub_category_id' => 21,
        ]);
        Gig::updateOrInsert([
            'title' => 'I will do any kind of website design',
            'user_id' => 2,
            'sub_sub_category_id' => 24,
        ]);
        Gig::updateOrInsert([
            'title' => 'I will do any kind of desktop application',
            'user_id' => 3,
            'sub_sub_category_id' => 25,
        ]);

    }
}
