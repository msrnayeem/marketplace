<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //basic standard premium
        Package::updateOrInsert([
            'name' => 'basic',
        ]);
        Package::updateOrInsert([
            'name' => 'standard',
        ]);
        Package::updateOrInsert([
            'name' => 'premium',
        ]);
 
    }
}