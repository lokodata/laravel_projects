<?php

namespace App\Booking;

use Spatie\Period\PeriodCollection;
use Spatie\Period\Period;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Spatie\Period\Precision;
use App\Models\Employee;
use App\Models\Service;
use App\Models\ScheduleExclusion;

class ScheduleAvailability
{
    protected PeriodCollection $periods;

    public function __construct(protected Employee $employee, protected Service $service)
    {
        $this->periods = new PeriodCollection();
    }

    public function forPeriod(Carbon $startsAt, Carbon $endsAt)
    {
        collect(CarbonPeriod::create($startsAt, $endsAt)->days())

            ->each(function (Carbon $date) {

                $this->addAvailabilityFromSchedule($date);

                $this->employee->scheduleExclusions->each(function (ScheduleExclusion $scheduleExclusion) {

                    $this->subtractScheduleExclusion($scheduleExclusion);

                });

                $this->excludeTimePassedToday();

            });

        return $this->periods;
    }

    protected function excludeTimePassedToday(){
        $this->periods = $this->periods->subtract(
            Period::make(
                now()->startOfDay(),
                now()->endOfHour(),
                Precision::MINUTE()
            )
        );
    }

    protected function subtractScheduleExclusion(ScheduleExclusion $scheduleExclusion)
    {
        $this->periods = $this->periods->subtract(
            Period::make(
                $scheduleExclusion->starts_at,
                $scheduleExclusion->ends_at,

                Precision::MINUTE()
            )
        );
    }

    protected function addAvailabilityFromSchedule(Carbon $date) {

        if (!$schedule = $this->employee->schedules->where('starts_at', '<=', $date)->where('ends_at', '>=', $date)->first()) {
            return;
        };

        [$startsAt, $endsAt] = $schedule->getWorkingHoursForDate($date);

        if ($startsAt === null || $endsAt === null) {
            return;
        }

        $startTime = $date->copy()->setTimeFromTimeString($startsAt);
        $endTime = $date->copy()->setTimeFromTimeString($endsAt)->subMinute($this->service->duration);

        $this->periods = $this->periods->add(
            Period::make(
                $startTime,
                $endTime,
                Precision::MINUTE()
            )
        );

    }

}
