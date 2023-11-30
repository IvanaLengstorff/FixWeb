<div class="p-2">

    <head>
        <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    </head>
    <div>
        @livewire('vehicle.modals.create-vehicle-modal')
        @livewire('vehicle.modals.edit-vehicle-modal')
        @livewire('vehicle.modals.destroy-vehicle-modal')
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                {{-- @can('operadores.create') --}}
                    <button class="btn btn-primary my-3" wire:click='openCreateVehicleModal'>Registrar Vehiculo</button>
                {{-- @endcan --}}
            </div>
            {{-- @can('operadores.index') --}}
                @livewire('vehicle.vehicle-datatable')
            {{-- @endcan --}}
        </div>
    </div>
</div>
