<?php

use App\Booking\ScheduleAvailability;
use App\Booking\ServiceSlotAvailability;
use Illuminate\Support\Facades\Route;
use App\Livewire\EmployeeShow;
use App\Livewire\Home;
use App\Models\Employee;
use App\Models\Service;
use Carbon\Carbon;
use App\Booking\SlotGenerator;
use App\Livewire\AppointmentsShow;
use App\Livewire\Checkout;

Route::get('/', Home::class)-> name('home');

Route::get('/employees/{employee:slug}', EmployeeShow::class)-> name('employee.show');

Route::get('/checkout/{service:slug}/{employee:slug?}', Checkout::class)->name('checkout');

Route::get('/appointments/{appointment:uuid}', AppointmentsShow::class)->name('appointments.show');



