<div>
    @if ($modalCrear)
        <div class="modald">
            <div class="modald-contenido">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Crear Vehiculo</h4>
                        </div>
                        <div class="modal-body">
                            <h5>Modelo:</h5>
                            <input type="text" wire:model="vehicle.model" class="form-control">
                            @error('vehicle.model')
                                <small class="text-danger">Debe ingresar un modelo</small>
                            @enderror

                            <h5>Placa:</h5>
                            <input type="text" wire:model="vehicle.placa" class="form-control">
                            @error('vehicle.placa')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <h5>Color:</h5>
                            <input type="text" wire:model="vehicle.color" class="form-control">
                            @error('vehicle.color')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="cancelar()">Cancelar</button>
                            <button type="button" class="btn btn-primary" wire:click="store()">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
