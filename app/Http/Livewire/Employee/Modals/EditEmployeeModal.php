<?php

namespace App\Http\Livewire\Employee\Modals;

use App\Models\Employee;
use Livewire\Component;

class EditEmployeeModal extends Component
{
    protected $listeners = ['openEditEmployeeModal'];

    public $modalEdit = false;

    public $employee=[];
    public $email = null;

    public function render()
    {
        return view('livewire.employee.modals.edit-employee-modal');
    }

    public function openEditEmployeeModal($id){
        $this->employee=Employee::find($id)->toArray();
        $this->modalEdit=true;
    }

    public function update(){
        $this->validate([
            'employee.name' => 'required|string|max:255',
            'employee.phone' => 'required|string|max:255',
        ]);
        $employee=Employee::find($this->employee['id']);
        $employee->update($this->employee);
        $this->emit('updateEmployeeTable');
        $this->limpiar();
    }

    public function cancelar()
    {
        $this->limpiar();
    }

    public function limpiar(){
        $this->employee=null;
        $this->modalEdit=false;
    }
}
