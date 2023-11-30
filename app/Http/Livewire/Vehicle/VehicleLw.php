<?php

namespace App\Http\Livewire\Vehicle;

use Livewire\Component;

class VehicleLw extends Component
{
    public function render()
    {
        return view('livewire.vehicle.vehicle-lw');
    }

    public function openCreateVehicleModal()
    {
        $this->emit('openCreateVehicleModal');
    }
}
