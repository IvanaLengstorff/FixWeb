<?php

namespace App\Http\Livewire\Employee;

use App\Models\Employee;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;

class EmployeeDatatable extends DataTableComponent
{
    protected $listeners = ['updateEmployeeTable'];
    protected $model = Employee::class;

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
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            Column::make("Carnet", "phone")
                ->sortable()
                ->searchable(),
            Column::make('Acciones', 'id')
                ->format(function ($value, $row, Column $column) {
                    return view('livewire.employee.employee-view-button', [
                        'row' => $row
                    ]);
                }),
        ];
    }

    public function builder(): Builder
    {
        return Employee::query()->where('mechanical_id',Auth()->user()->mechanical->id);
    }

    public function edit($employeeId)
    {
        $this->emit('openEditEmployeeModal', $employeeId);
    }

    public function destroy($employeeId)
    {
        $this->emit('openDestroyEmployeeModal', $employeeId);
    }

    public function updateEmployeeTable()
    {
        $this->builder();
    }
}
