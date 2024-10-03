<?php

namespace App\Booking;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use App\Models\Employee;

class Slot
{
    public Collection $employees;

    public function __construct(public Carbon $time)
    {

        $this->employees = collect();

    }

    public function addEmployee(Employee $employee)
    {
        $this->employees->push($employee);
    }

    public function hasEmployees()
    {
        return $this->employees->isNotEmpty();
    }

}
