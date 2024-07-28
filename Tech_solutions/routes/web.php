<?php

namespace App\routes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorGetProyecto;
use App\Http\Controllers\ControladorCrearProyecto;
use App\Http\Controllers\ControladorUpdateProyectoId;
use App\Http\Controllers\ControladorGetProyectoId;
use App\Http\Controllers\ControladorDeleteProyectoId;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/CalculoUF', function () {
    return view('CalculoUF');
});
// rutas para los controladores
Route::get('/GetProyecto', [ControladorGetProyecto::class, 'get']);
Route::get('/GetProyectoId/{_id}', [ControladorGetProyectoId::class, 'get']);
Route::get('/CrearProyecto/{_id}', [ControladorCrearProyecto::class, 'Create']);
Route::get('/UpdateProyectoId/{_id}/{_nuevo}', [ControladorUpdateProyectoId::class, 'update']);
Route::get('/DeleteProyectoId/{_id}', [ControladorDeleteProyectoId::class, 'deleteById']);

