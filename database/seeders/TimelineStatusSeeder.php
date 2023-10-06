<?php

namespace Database\Seeders;

use App\Models\TimelineStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimelineStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TimelineStatus::create([
            'name' => 'Placed',
            'description' => 'Order placed',
        ]);
        TimelineStatus::create([
            'name' => 'Requirements',
            'description' => 'Requirements sent',
        ]);
        TimelineStatus::create([
            'name' => 'Requirements',
            'description' => 'Requirements received',
        ]);
        TimelineStatus::create([
            'name' => 'Cancelled',
            'description' => 'Order cancelled',
        ]);
        TimelineStatus::create([
            'name' => 'Confirmed',
            'description' => 'Order confirmed',
        ]);
        TimelineStatus::create([
            'name' => 'In Progress',
            'description' => 'Order in progress',
        ]);
        TimelineStatus::create([
            'name' => 'Completed',
            'description' => 'Order completed',
        ]);
        TimelineStatus::create([
            'name' => 'Delivered',
            'description' => 'Order delivered',
        ]);
        TimelineStatus::create([
            'name' => 'Delivered',
            'description' => 'Order received',
        ]);

    }
}
