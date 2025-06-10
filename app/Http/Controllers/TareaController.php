<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tarea::where('estado', true)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tarea =  new Tarea();
        $tarea->descripcion = $request->descripcion;
        $tarea->completada = false;
        $tarea->estado = true;
        $tarea->save();
        return $tarea;
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        return $tarea;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        $tarea->descripcion = $request->descripcion;
        $tarea->save();
        return $tarea;
    }
    public function updateCompletada(Request $request, Tarea $tarea)
    {
        $tarea->completada = $request->completada;
        $tarea->save();
        return $tarea;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->estado  = false;
        $tarea->save();
        return $tarea;
    }
}
