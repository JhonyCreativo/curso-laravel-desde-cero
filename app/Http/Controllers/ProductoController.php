<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Producto::with(['Medida','Marca'])->where('estado', true)->get();
        // return Producto::where('estado', true)->get()->map(function($producto){
        // //    return $producto->load(['Medida','Marca']);
           
        //     $producto->marca = $producto->Marca; 
        //     return $producto; 
        // });
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->name = $request->name;
        $producto->codigo_barra = $request->codigo_barra;
        $producto->precio = $request->precio;
        $producto->costo = $request->costo;
        $producto->stock_minimo = $request->stock_minimo;
        $producto->categoria_id = $request->categoria_id;
        $producto->medida_id = $request->medida_id;
        $producto->marca_id = $request->marca_id;
        $producto->save();
        return $this->show($producto);  
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        $producto->load(['Medida','Marca','Categoria']);
        return $producto;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->name = $request->name;
        $producto->codigo_barra = $request->codigo_barra;
        $producto->precio = $request->precio;
        $producto->costo = $request->costo;
        $producto->stock_minimo = $request->stock_minimo;
        $producto->categoria_id = $request->categoria_id;
        $producto->medida_id = $request->medida_id;
        $producto->marca_id = $request->marca_id;
        $producto->save();
        return $producto; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->estado = false;
        $producto->save();
        return $producto;
    }
}
