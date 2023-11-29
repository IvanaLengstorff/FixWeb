<?php

namespace App\Http\Livewire\Employee;

use Livewire\Component;

class EmployeeLw extends Component
{
    public function render()
    {
        return view('livewire.employee.employee-lw');
    }

    public function openCreateEmployeeModal()
    {
        $this->emit('openCreateEmployeeModal');
    }
}
