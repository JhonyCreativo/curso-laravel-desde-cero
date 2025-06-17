<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/welcome', 'welcome');
Route::view('/tareas', 'welcome');
Route::view('/marcas', 'configuracion.marcas');
Route::view('/medidas', 'configuracion.medidas');
Route::view('/categorias', 'configuracion.categorias');
Route::view('/productos', 'configuracion.productos');
Route::view('/documentos', 'configuracion.documentos');
Route::view('/clientes', 'configuracion.clientes');
Route::view('/pos', 'pos.index');
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