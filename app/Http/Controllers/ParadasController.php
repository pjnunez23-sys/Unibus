<?php

namespace App\Http\Controllers;

use App\Models\Paradas;
use Illuminate\Http\Request;

class ParadasController extends Controller
{
    // GET - listar todas
    public function index()
    {
        return Paradas::all();
    }

    // POST - crear una
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'direccion' => 'nullable|string',
            'latitud' => 'nullable|numeric',
            'longitud' => 'nullable|numeric'
        ]);

        $parada = Paradas::create($validated);

        return response()->json($parada, 201);
    }

    // GET por ID
    public function show($id)
    {
        return Paradas::findOrFail($id);
    }

    // PATCH - actualizar
    public function update(Request $request, $id)
    {
        $parada = Paradas::findOrFail($id);

        $parada->update($request->all());

        return response()->json($parada, 200);
    }

    // DELETE - eliminar
    public function destroy($id)
    {
        $parada = Paradas::findOrFail($id);
        $parada->delete();

        return response()->json(null, 204);
    }
}
