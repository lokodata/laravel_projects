<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScheduleExclusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            [
                'schedule_id' => 1, // Employee 1
                'starts_at' => '2024-09-29 12:00:00', // Lunch start time (today)
                'ends_at' => '2024-09-29 13:00:00',   // Lunch end time (today)
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'schedule_id' => 2, // Employee 2
                'starts_at' => '2024-09-29 12:00:00', // Lunch start time (today)
                'ends_at' => '2024-09-29 13:00:00',   // Lunch end time (today)
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('schedule_exclusions')->insert($schedules);
    }
}
