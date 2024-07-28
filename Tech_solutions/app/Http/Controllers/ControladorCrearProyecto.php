<?php

namespace App\Http\Controllers;

use App\Models\ModelProyecto;
use Illuminate\Http\Request;

class ControladorCrearProyecto extends Controller
{
    public function Create($_nuevo)
    {
        //objeto nuevo
        $proyectoId = $_nuevo;
        $proyectoNombre = ModelProyecto::GetNombre();
        $proyectoDate = ModelProyecto::GetDate();
        $proyectoEstado = ModelProyecto::GetEstado();
        $proyectoResponsable = ModelProyecto::GetResponsable();
        $proyectoMonto = ModelProyecto::GetMonto();
        return view ('CrearProyectoView', compact('proyectoId', 'proyectoNombre','proyectoDate','proyectoEstado','proyectoResponsable','proyectoMonto'));
    }
    
    
    

    // public function update($_nuevo){ //considerar que tengo que asignar el id // $nuevo->setId(1);
    //     //para actualizar un registro $_nuevo->getId()
    //     //UPDATE tabla SET atributo WHERE id = $_nuevo->getId()
    // }
    

    
}

