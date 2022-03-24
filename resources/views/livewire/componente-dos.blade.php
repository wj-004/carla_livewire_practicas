<div class="row">
    <div class="col-12">
        <select wire:model='seleccion' wire:change="$emit('seleccionActualizada')" class="form-select"
            aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">mostrar componente 3</option>
        </select>
    </div>

    <div class="col-sm-6">

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">John</h5>
                <hr>
                <form wire:submit.prevent='enviarMensaje''>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Contenido del mensaje:</label>
                        <input wire:model=' mensajeJohn' class="form-control" id="exampleFormControlTextarea1"
                    rows="3"></input>
            </div>
            <button type="submit" class="btn btn-primary">button Enviar</button>
            </form>

        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Alice</h5>
            <hr>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contenido del mensaje:</label>
                <textarea wire:model.lazy='mensajeAlice' class="form-control" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div> <a wire:click='enviarMensaje' href="#" class="btn btn-primary">a Enviar</a>
        </div>
    </div>
</div>



<div class="col-sm-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title bg-secondary">Chat</h5>
            <p class="card-text">{{$conversacion}}</p>
        </div>
    </div>
</div>

<div class="col-sm-3">Memoria mensaje de John
    <br>
    <textarea disabled wire:model='mensajeJohn' class="form-control" id="exampleFormControlTextarea1"
        rows="3"></textarea>
</div>
<div class="col-sm-3">Memoria mensaje de Alice
    <br>
    <textarea disabled wire:model='mensajeAlice' class="form-control" id="exampleFormControlTextarea1"
        rows="3"></textarea>
</div>

<div class="row">
    <div class="col-6">
        <h5>Dinámico</h5>
        @include("livewire.$vista")
    </div>
    <div class="col-6">
        <h5>Estático</h5>
        @include("livewire.componente-tres")
    </div>
  
    
</div>


</div>