<?php

namespace Database\Seeders;

use App\Models\GigPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GigPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        GigPackage::updateOrInsert([
            'gig_id' => 1,
            'package_id' => 1,
            'description' => 'I will do any kind of logo design',
            'price' => 5,
            'delivery_time' => '4',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 1,
            'package_id' => 2,
            'description' => 'I will do any kind of logo design',
            'price' => 10,
            'delivery_time' => '3',

        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 1,
            'package_id' => 3,
            'description' => 'I will do any kind of logo design',
            'price' => 15,
            'delivery_time' => '2',
        ]);


        GigPackage::updateOrInsert([
            'gig_id' => 2,
            'package_id' => 1,
            'description' => 'I will do any kind of website design',
            'price' => 5,
            'delivery_time' => '4',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 2,
            'package_id' => 2,
            'description' => 'I will do any kind of website design',
            'price' => 10,
            'delivery_time' => '3',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 2,
            'package_id' => 3,
            'description' => 'I will do any kind of website design',
            'price' => 15,
            'delivery_time' => '2',
        ]);


        GigPackage::updateOrInsert([
            'gig_id' => 3,
            'package_id' => 1,
            'description' => 'I will do any kind of mobile app design',
            'price' => 5,
            'delivery_time' => '4',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 3,
            'package_id' => 2,
            'description' => 'I will do any kind of mobile app design',
            'price' => 10,
            'delivery_time' => '3',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 3,
            'package_id' => 3,
            'description' => 'I will do any kind of mobile app design',
            'price' => 15,
            'delivery_time' => '2',
        ]);


        GigPackage::updateOrInsert([
            'gig_id' => 4,
            'package_id' => 1,
            'description' => 'I will do any kind of custom website',
            'price' => 5,
            'delivery_time' => '4',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 4,
            'package_id' => 2,
            'description' => 'I will do any kind of custom website',
            'price' => 10,
            'delivery_time' => '3',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 4,
            'package_id' => 3,
            'description' => 'I will do any kind of custom website',
            'price' => 15,
            'delivery_time' => '2',
        ]);

        GigPackage::updateOrInsert([
            'gig_id' => 5,
            'package_id' => 1,
            'description' => 'I will do any kind of website design',
            'price' => 5,
            'delivery_time' => '4',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 5,
            'package_id' => 2,
            'description' => 'I will do any kind of website design',
            'price' => 10,
            'delivery_time' => '3',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 5,
            'package_id' => 3,
            'description' => 'I will do any kind of website design',
            'price' => 15,
            'delivery_time' => '2',
        ]);


        GigPackage::updateOrInsert([
            'gig_id' => 6,
            'package_id' => 1,
            'description' => 'I will do any kind of desktop application',
            'price' => 5,
            'delivery_time' => '4',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 6,
            'package_id' => 2,
            'description' => 'I will do any kind of desktop application',
            'price' => 10,
            'delivery_time' => '3',
        ]);
        GigPackage::updateOrInsert([
            'gig_id' => 6,
            'package_id' => 3,
            'description' => 'I will do any kind of desktop application',
            'price' => 15,
            'delivery_time' => '2',
        ]);



    }
}