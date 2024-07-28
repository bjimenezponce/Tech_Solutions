<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUpdateProyectoId extends Controller
{
    public function update($_id, $_nuevo)
    {
        
        return view('UpdateProyectoIdView',compact('_id', '_nuevo'));
    }
}
