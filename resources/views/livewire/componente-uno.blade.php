<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a wire:click='decirHola' href="#" class="btn btn-success">HOLA</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a wire:click='decirChau' href="#" class="btn btn-danger">CHAU</a>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Zona de mensajes</h5>
                <p class="card-text">{{$mensaje}}</p>
            </div>
        </div>
    </div>
</div>
