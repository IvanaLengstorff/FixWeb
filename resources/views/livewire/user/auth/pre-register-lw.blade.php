<div>
    <div class="row align-items-center">
        <div class="col-sm-6  d-flex justify-content-center my-2">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/logo.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Usuario</h5>
                    <p class="card-text">Puedes registrarte y pedir auxilio en cualquier momento...</p>
                    <button wire:click='registerClient()' class="btn btn-primary">Registrate Aqui</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6  d-flex justify-content-center my-2">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/logo.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Taller Vehicular</h5>
                    <p class="card-text">Brindaras tus servicios de taller mecanico a quienes lo necesiten</p>
                    <button wire:click='registerVehicle()' class="btn btn-primary">Registrate Aqui</button>
                </div>
            </div>
        </div>
    </div>
</div>
