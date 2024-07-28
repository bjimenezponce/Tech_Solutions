<?php

namespace App\Http\Controllers;

use App\Models\ModelProyecto;
use Illuminate\Http\Request;

class ControladorDeleteProyectoId extends Controller
{
    public function deleteById($_id)
    {    
        $proyectoId = $_id;
        $proyectoNombre = ModelProyecto::GetNombre();
        $proyectoDate = ModelProyecto::GetDate();
        $proyectoEstado = ModelProyecto::GetEstado();
        $proyectoResponsable = ModelProyecto::GetResponsable();
        $proyectoMonto = ModelProyecto::GetMonto();
        return view ('DeleteProyectoIdView',compact('proyectoId', 'proyectoNombre','proyectoDate','proyectoEstado','proyectoResponsable','proyectoMonto'));
    }

}
