<?php

namespace App\Http\Controllers;

use App\Models\Posicion;
use Illuminate\Http\Request;

class PosicionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'idEmpresa' => 'required|exists:empresas,id',
            'idProducto' => 'required|exists:productos,id',
            'fechaEntregaInicio' => 'required|date|after_or_equal:today',
            'precio' => 'required|numeric|gt:0',
            'moneda' => 'required|string|max:10',
        ]);

        $posicion = Posicion::create($validated);
        return response()->json($posicion, 201);
    }

    public function index()
    {
        $posiciones = Posicion::with(['producto', 'empresa'])
            ->join('productos', 'posiciones.idProducto', '=', 'productos.id')
            ->orderByDesc('productos.usoFrecuente')
            ->select('posiciones.*')
            ->get();

        return response()->json($posiciones);
    }
}
