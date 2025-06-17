<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Documento::where('estado', true)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $documento = new Documento();
        $documento->name = $request->name;
        $documento->save();
        return $documento;
    }

    /**
     * Display the specified resource.
     */
    public function show(Documento $documento)
    {
        return $documento;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documento $documento)
    {
        $documento->name = $request->name;
        $documento->save();
        return $documento;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documento $documento)
    {
        $documento->estado = false;
        $documento->save();
        return $documento;
    }
}
