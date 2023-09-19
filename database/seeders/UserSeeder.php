<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'msrnayeem@gmail.com'],
            [
                'name' => 'msr nayeem',
                'password' => bcrypt('msr@nayeem01'),
                'facebook_id' => null,
                'google_id' => null,
                'email_verified_at' => now(),
                'remember_token' => null,
            ]
        );
    }
}