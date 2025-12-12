<?php

namespace App\Http\Controllers;

use App\Models\Camiones;
use Illuminate\Http\Request;


class CamionesController extends Controller
{
    // GET - listar todos
    public function index()
    {
        return Camiones::all();
    }

    // POST - crear uno
    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero_economico' => 'required|string',
            'placas' => 'required|string',
            'capacidad' => 'required|integer',
            'ruta_id' => 'required|exists:rutas,id'
        ]);

        $camion = Camiones::create($validated);

        return response()->json($camion, 201);
    }

    // GET por ID
    public function show($id)
    {
        return Camiones::findOrFail($id);
    }

    // PATCH - actualizar
    public function update(Request $request, $id)
    {
        $camion = Camiones::findOrFail($id);

        $camion->update($request->all());

        return response()->json($camion, 200);
    }

    // DELETE
    public function destroy($id)
    {
        $camion = Camiones::findOrFail($id);
        $camion->delete();

        return response()->json(null, 204);
    }
}
