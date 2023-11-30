<?php

namespace App\Http\Livewire\Vehicle;

use App\Models\Client;
use App\Models\Vehicle;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class VehicleDatatable extends DataTableComponent
{
    protected $listeners = ['updateVehicleTable'];
    protected $model = Vehicle::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("Modelo", "model")
                ->sortable()
                ->searchable(),
            Column::make("Placa", "placa")
                ->sortable()
                ->searchable(),
            Column::make("Color", "color")
                ->sortable()
                ->searchable(),
            Column::make('Acciones', 'id')
                ->format(function ($value, $row, Column $column) {
                    return view('livewire.vehicle.vehicle-view-button', [
                        'row' => $row
                    ]);
                }),
        ];
    }

    public function builder(): Builder
    {
        return Vehicle::query()->where('client_id',Auth()->user()->client->id);
    }

    public function edit($vehicleId)
    {
        $this->emit('openEditVehicleModal', $vehicleId);
    }

    public function destroy($vehicleId)
    {
        $this->emit('openDestroyVehicleModal', $vehicleId);
    }

    public function updateVehicleTable()
    {
        $this->builder();
    }
}
