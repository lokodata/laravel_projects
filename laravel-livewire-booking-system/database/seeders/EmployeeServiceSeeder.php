<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employeeIds = Employee::pluck('id')->toArray();
        $serviceIds = Service::pluck('id')->toArray();

        DB::table('employee_service')->insert([
            ['employee_id' => $employeeIds[0], 'service_id' => $serviceIds[0], 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['employee_id' => $employeeIds[0], 'service_id' => $serviceIds[1], 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['employee_id' => $employeeIds[0], 'service_id' => $serviceIds[2], 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['employee_id' => $employeeIds[0], 'service_id' => $serviceIds[3], 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['employee_id' => $employeeIds[0], 'service_id' => $serviceIds[4], 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['employee_id' => $employeeIds[1], 'service_id' => $serviceIds[0], 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['employee_id' => $employeeIds[1], 'service_id' => $serviceIds[1], 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['employee_id' => $employeeIds[1], 'service_id' => $serviceIds[4], 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
