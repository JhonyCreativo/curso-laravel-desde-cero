<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::with(['Documento'])->where('estado', true)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->name = $request->name;
        $cliente->apellido = $request->apellido;
        $cliente->documento_id = $request->documento_id;
        $cliente->n_documento = $request->n_documento;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return $cliente;
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->name = $request->name;
        $cliente->apellido = $request->apellido;
        $cliente->documento_id = $request->documento_id;
        $cliente->n_documento = $request->n_documento;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->estado = false;
        $cliente->save();
        return $cliente;
    }
}
