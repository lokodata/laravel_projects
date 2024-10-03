<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'id' => 1,
            'name' => 'John Doe',
            'slug' => 'john-doe',
            'profile_photo_url' => 'https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Employee::create([
            'id' => 2,
            'name' => 'Jane Smith',
            'slug' => 'jane-smith',
            'profile_photo_url' => 'https://images.pexels.com/photos/7562313/pexels-photo-7562313.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
