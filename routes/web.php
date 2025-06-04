<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hola');
});

Route::view('/welcome', 'welcome');
//otra forma 
Route::get('/welcome', function () {
   return view('welcome');
});

//HTTP REQUEST 
// POST - GET
// GET ==> retornar vistas -> retornar JSON API
// POST ==> enviar informacion al servidor -> crear un recurso -> hacer peticiones http -> leer informacion
// PUT - DELETE
// PUT ==> actualizar informacion => similitud con post 
// DELETE ==> borrar informacion 