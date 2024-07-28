<?php

namespace App\Http\Controllers;
use App\Models\ModelProyecto;

use Illuminate\Http\Request;

class ControladorGetProyectoId extends Controller
{
    public function get($_id)
    {
        $proyectoId = ModelProyecto::GetId();
        $proyectoNombre = ModelProyecto::GetNombre();
        $proyectoDate = ModelProyecto::GetDate();
        $proyectoEstado = ModelProyecto::GetEstado();
        $proyectoResponsable = ModelProyecto::GetResponsable();
        $proyectoMonto = ModelProyecto::GetMonto();
        return view('GetProyectoIdView',compact ('_id'));
        
    }
}
