<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponenteUno extends Component
{
    public $mensaje;




    public function mount()
    {
        $this->mensaje = "Sin mensaje";
    }

    public function decirHola()
    {
        $this->mensaje = "Hola";
    }

    public function decirChau()
    {
        $this->mensaje = "Chau";

    }




    public function render()
    {
        return view('livewire.componente-uno');
    }
}
