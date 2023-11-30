<?php

namespace App\Http\Livewire\Employee\Modals;

use App\Models\Employee;
use Livewire\Component;

class CreateEmployeeModal extends Component
{
    protected $listeners = ['openCreateEmployeeModal'];

    public $modalCrear = false;
    public $employee = [];

    public function render()
    {
        return view('livewire.employee.modals.create-employee-modal');
    }

    public function openCreateEmployeeModal()
    {
        $this->modalCrear = true;
    }

    public function store()
    {
        $this->validate([
            'employee.name' => 'required|string|max:255',
            'employee.phone' => 'required|string|max:255',
        ]);
        $this->employee['mechanical_id'] = Auth()->user()->mechanical->id;

        Employee::create($this->employee);

        $this->emit('updateEmployeeTable');
        $this->limpiar();
    }

    public function cancelar()
    {
        $this->limpiar();
    }

    public function limpiar()
    {
        $this->employee = [];
        $this->modalCrear = false;
    }
}
