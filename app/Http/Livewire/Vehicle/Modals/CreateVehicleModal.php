<?php

namespace App\Http\Livewire\Vehicle\Modals;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateVehicleModal extends Component
{
    protected $listeners = ['openCreateVehicleModal'];

    public $modalCrear = false;
    public $vehicle = [];

    public function render()
    {
        return view('livewire.vehicle.modals.create-vehicle-modal');
    }

    public function openCreateVehicleModal()
    {
        $this->modalCrear = true;
    }

    public function store()
    {
        $this->validate([
            'vehicle.model' => 'required|string|max:255',
            'vehicle.placa' => 'required|string|max:255',
            'vehicle.color' => 'required|string|max:255',
        ]);

        $this->vehicle['client_id'] = Auth()->user()->client->id;

        $vehiculo=Vehicle::create($this->vehicle);
        dd($vehiculo);

        $this->emit('updateVehicleTable');
        $this->limpiar();
    }

    public function cancelar()
    {
        $this->limpiar();
    }

    public function limpiar()
    {
        $this->vehicle = [];
        $this->modalCrear = false;
    }
}
