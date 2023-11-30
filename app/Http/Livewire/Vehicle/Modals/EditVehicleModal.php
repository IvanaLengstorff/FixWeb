<?php

namespace App\Http\Livewire\Vehicle\Modals;

use App\Models\Vehicle;
use Livewire\Component;

class EditVehicleModal extends Component
{

    protected $listeners = ['openEditVehicleModal'];

    public $modalEdit = false;

    public $vehicle=[];

    public function render()
    {
        return view('livewire.vehicle.modals.edit-vehicle-modal');
    }

    public function openEditVehicleModal($id){
        $this->vehicle=Vehicle::find($id)->toArray();
        $this->modalEdit=true;
    }

    public function update(){
        $this->validate([
            'vehicle.model' => 'required|string|max:255',
            'vehicle.placa' => 'required|string|max:255',
            'vehicle.color' => 'required|string|max:255',
        ]);
        $vehicle=Vehicle::find($this->vehicle['id']);
        $vehicle->update($this->vehicle);
        $this->emit('updateVehicleTable');
        $this->limpiar();
    }

    public function cancelar()
    {
        $this->limpiar();
    }

    public function limpiar(){
        $this->vehicle=null;
        $this->modalEdit=false;
    }
}
