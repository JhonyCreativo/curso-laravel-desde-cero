<?php

// use App\Http\Controllers\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('tareas', [TareaController::class, 'index']);
Route::get('tareas', 'TareaController@index');



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
