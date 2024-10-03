<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $schedules = [
            [
                'id' => 1,
                'employee_id' => 1,
                'starts_at' => '2024-01-01',
                'ends_at' => '2026-01-01',
                'monday_starts_at' => '08:00:00',
                'monday_ends_at' => '17:00:00',
                'tuesday_starts_at' => '08:00:00',
                'tuesday_ends_at' => '17:00:00',
                'wednesday_starts_at' => '08:00:00',
                'wednesday_ends_at' => '17:00:00',
                'thursday_starts_at' => '08:00:00',
                'thursday_ends_at' => '17:00:00',
                'friday_starts_at' => '08:00:00',
                'friday_ends_at' => '17:00:00',
                'saturday_starts_at' => '08:00:00',
                'saturday_ends_at' => '17:00:00',
                'sunday_starts_at' => '08:00:00',
                'sunday_ends_at' => '17:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'employee_id' => 2,
                'starts_at' => '2024-01-01',
                'ends_at' => '2026-01-01',
                'monday_starts_at' => '08:00:00',
                'monday_ends_at' => '17:00:00',
                'tuesday_starts_at' => '08:00:00',
                'tuesday_ends_at' => '17:00:00',
                'wednesday_starts_at' => '08:00:00',
                'wednesday_ends_at' => '17:00:00',
                'thursday_starts_at' => '08:00:00',
                'thursday_ends_at' => '17:00:00',
                'friday_starts_at' => '08:00:00',
                'friday_ends_at' => '17:00:00',
                'saturday_starts_at' => '08:00:00',
                'saturday_ends_at' => '17:00:00',
                'sunday_starts_at' => '08:00:00',
                'sunday_ends_at' => '17:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('schedules')->insert($schedules);
    }
}
