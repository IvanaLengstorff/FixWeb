<div>
    <div class="row justify-content-center">
        <div class="row d-flex justify-content-between py-2">
            <div class="ml-3">
                <h2><b>Esperando Solicitudes</b></h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($requests as $request)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div wire:ignore id="map.{{ $request->id }}" class="card-img-top"></div>
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $request->client->name }}</b></h5>
                        <p class="card-text">{{ $request->description }}</p>
                        <button class="btn btn-primary" wire:click="acceptedRequest('{{$request->id}}')">Aceptar Cliente</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        document.addEventListener('livewire:load', function() {
            function ejecutarCadaSegundo() {
                console.log("¡Hola, cada segundo!");
                Livewire.emit('render');
            }

            setInterval(ejecutarCadaSegundo, 1000);
        });
    </script>
</div>
