<?php

namespace App\Http\Controllers;
use App\Models\ModelProyecto;
use Illuminate\Http\Request;

class ControladorGetProyecto extends Controller
{
    public function get()
    {
        $proyectoId = ModelProyecto::GetId();
        $proyectoNombre = ModelProyecto::GetNombre();
        $proyectoDate = ModelProyecto::GetDate();
        $proyectoEstado = ModelProyecto::GetEstado();
        $proyectoResponsable = ModelProyecto::GetResponsable();
        $proyectoMonto = ModelProyecto::GetMonto();
        return view ('GetProyectoView', compact('proyectoId', 'proyectoNombre','proyectoDate','proyectoEstado','proyectoResponsable','proyectoMonto'));
    }
}
