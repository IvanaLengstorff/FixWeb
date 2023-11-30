<div>
    <div class="row justify-content-center">
        <div class="row d-flex justify-content-between py-2">
            <div class="ml-3">
                @if ($this->request_active == 0)
                    <h2><b>SOLICITAR AYUDA</b></h2>
                @endif

                @if ($this->request_active == 1)
                    <h2><b>BUSCANDO TALLER MECANICO....</b></h2>
                @endif

                @if ($this->request_active == 2)
                    <h2><b>LA AYUDA VIENE EN CAMINO</b></h2>
                @endif

            </div>
        </div>
    </div>
    <div wire:ignore id="map" style="height: 400px;"></div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-sm-12 col-md-12 my-1">
                <label for="name">Descripcion:</label>
                <textarea @if ($this->request_active > 0) @readonly(true) @endif placeholder="Escriba una descripcion"
                    wire:model="request.description" class="form-control" name="" id="" cols="30" rows="4"></textarea>
                @error('request.description')
                    <small class="text-danger">Debe ingresar una descripcion</small>
                @enderror
            </div>

            <div class="col-sm-12 col-md-12 my-1 d-flex justify-content-center">

                @if ($this->request_active == 0)
                    <button class="btn btn-success" wire:click="createRequest()">Solicitar Ayuda</button>
                @endif

                @if ($this->request_active == 1)
                    <button class="btn btn-danger" wire:click="destroyRequest()">Cancelar Solicitud</button>
                @endif

                @if ($this->request_active == 2)
                    <h2><b>LA AYUDA VIENE EN CAMINO</b></h2>
                @endif

            </div>


        </div>
    </div>
    <script>
        function inicializarMapa() {
            navigator.geolocation.getCurrentPosition(function(position) {
                Livewire.emit('setUbicacionActual', {
                    latitud: position.coords.latitude,
                    longitud: position.coords.longitude
                });
            });

            Livewire.on('getUbicacionActual', function(ubicacion) {
                console.log("daniel", ubicacion)
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: ubicacion.latitud,
                        lng: ubicacion.longitud
                    },
                    zoom: 15,
                });

                var marker = new google.maps.Marker({
                    position: {
                        lat: ubicacion.latitud,
                        lng: ubicacion.longitud
                    },
                    map: map,
                });
            });
        }
    </script>

</div>
