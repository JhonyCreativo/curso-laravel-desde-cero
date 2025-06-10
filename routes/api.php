<?php

// use App\Http\Controllers\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('tareas', [TareaController::class, 'index']);
Route::get('tareas', 'TareaController@index');
//crear datos con  post
Route::post('tareas', 'TareaController@store');
//mostrar un registro del modelo  de tareas
Route::get('tareas/{tarea}', 'TareaController@show');
//actualizar un resgitro del modelo de  tareas
Route::put('tareas/{tarea}', 'TareaController@update');
Route::put('tareas-completadas/{tarea}', 'TareaController@updateCompletada');
//eliminar un resgitro del modelo de  tareas
Route::delete('tareas/{tarea}', 'TareaController@destroy');

// Route::put('tareas/{tarea}', 'TareaController@update');



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
