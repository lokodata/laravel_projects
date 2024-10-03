<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Service;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'employees' => Employee::all(),

            'services' => Service::orderBy('price', 'desc')->get(),
        ]);
    }
}
