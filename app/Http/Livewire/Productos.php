<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
//use Livewire\WithPagination;

class Productos extends Component
{
    
    //definimosunas variables
    public $productos,$descripcion, $cantidad, $id_producto;
    public $modal = false;

    public function render()
    {
        $this->productos = Producto::all();

        return view('livewire.productos');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->descripcion = '';
        $this->cantidad = '';
        $this->id_producto = '';
    }

    public function editar($id)
    {
        //dd($id);
        $producto = Producto::findOrFail($id);
        $this->id_producto = $id;
        $this->descripcion = $producto->descripcion;
        $this->cantidad = $producto->cantidad;
        $this->abrirModal();
    }

    public function eliminar($id)
    {
        
        $producto = Producto::findOrFail($id)->delete();
        session()->flash('mensaje', '¡Registro eliminado correctamente!');
    }

    public function guardar()
    {
        Producto::updateOrCreate(['id'=>$this->id_producto],
            [
                'descripcion' => $this->descripcion,
                'cantidad' => $this->cantidad
            ]);

        $this->cerrarModal();
        $this->limpiarCampos();
    }
}
