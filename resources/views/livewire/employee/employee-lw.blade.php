<div class="p-2">

    <head>
        <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    </head>
    <div>
        @livewire('employee.modals.create-employee-modal')
        @livewire('employee.modals.edit-employee-modal')
        @livewire('employee.modals.destroy-employee-modal')
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                {{-- @can('operadores.create') --}}
                    <button class="btn btn-primary my-3" wire:click='openCreateEmployeeModal'>Registrar Empleado</button>
                {{-- @endcan --}}
            </div>
            {{-- @can('operadores.index') --}}
                @livewire('employee.employee-datatable')
            {{-- @endcan --}}
        </div>
    </div>
</div>
