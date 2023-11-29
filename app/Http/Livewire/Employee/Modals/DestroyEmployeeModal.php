<?php

namespace App\Http\Livewire\Employee\Modals;

use App\Models\Employee;
use Livewire\Component;

class DestroyEmployeeModal extends Component
{
    protected $listeners = ['openDestroyEmployeeModal'];

    public $modalDestroy = false;

    public $employee=[];

    public function render()
    {
        return view('livewire.employee.modals.destroy-employee-modal');
    }

    public function openDestroyEmployeeModal($id){
        $this->employee['id']=$id;
        $this->modalDestroy=true;
    }

    public function destroy()
    {
        $employee=Employee::find($this->employee['id']);
        $employee->delete();
        $this->emit('updateEmployeeTable');
        $this->modalDestroy=false;
    }

    public function cancelar()
    {
        $this->limpiar();
    }

    public function limpiar(){
        $this->employee=[];
        $this->modalDestroy=false;
    }
}
