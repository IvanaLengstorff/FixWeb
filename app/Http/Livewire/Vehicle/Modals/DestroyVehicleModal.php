<?php

namespace App\Http\Livewire\Vehicle\Modals;

use App\Models\Vehicle;
use Livewire\Component;

class DestroyVehicleModal extends Component
{
    protected $listeners = ['openDestroyVehicleModal'];

    public $modalDestroy = false;

    public $vehicle=[];

    public function render()
    {
        return view('livewire.vehicle.modals.destroy-vehicle-modal');
    }

    public function openDestroyVehicleModal($id){
        $this->vehicle['id']=$id;
        $this->modalDestroy=true;
    }

    public function destroy()
    {
        $vehicle=Vehicle::find($this->vehicle['id']);
        $vehicle->delete();
        $this->emit('updateVehicleTable');
        $this->modalDestroy=false;
    }

    public function cancelar()
    {
        $this->limpiar();
    }

    public function limpiar(){
        $this->vehicle=[];
        $this->modalDestroy=false;
    }
}
