<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponenteDos extends Component
{


    /* Escucha eventos  'evento emitido en la vista, por ejemplo' => 'nombre de funcion ' */
    protected $listeners = [

        /*         'seleccionActualizada' => 'mount',
 */
        'seleccionActualizada',
    ];



    public $conversacion, $mensajeJohn, $mensajeAlice, $seleccion;
    public $vista;


    public function mount()
    {
        $this->vista = "componente-tres";
        $this->conversacion = "Sin mensajes";
    }

    public function seleccionActualizada()
    {
        $this->vista = "componente-cuatro";
        $this->conversacion = "Evento detectado";
    }


    public function enviarMensaje()
    {
        $this->conversacion = $this->mensajeJohn;
        $this->conversacion = $this->mensajeAlice;
        $this->mensajeJohn = "";
        $this->mensajeAlice = "";
    }


    public function render()
    {
        return view('livewire.componente-dos');
    }
}
