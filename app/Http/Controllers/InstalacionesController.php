<?php

namespace App\Http\Controllers;

use App\Models\instalaciones;
use Illuminate\Http\Request;

class InstalacionesController extends Controller
{
    // GET - Listar todo
    public function index()
    {
        return Instalaciones::all();
    }

    // POST - Crear
    public function store(Request $request)
    {
        $data = $request->validate([
        'nombre' => 'required|string|max:255',
        'direccion' => 'required|string|max:255',
        'latitud' => 'nullable|numeric',
        'longitud' => 'nullable|numeric',
    ]);

    $instalacion = Instalaciones::create($data);

    return response()->json($instalacion, 201);
    }

    // GET - Mostrar uno
    public function show($id)
    {
        return Instalaciones::findOrFail($id);
    }

    // PUT / PATCH - Actualizar
    public function update(Request $request, $id)
    {
        $instalacion = Instalaciones::findOrFail($id);

    $data = $request->validate([
        'nombre' => 'sometimes|string|max:255',
        'direccion' => 'sometimes|string|max:255',
        'latitud' => 'nullable|numeric',
        'longitud' => 'nullable|numeric',
    ]);

    $instalacion->update($data);

    return response()->json([
        'message' => 'Instalación actualizada correctamente',
        'data' => $instalacion
    ], 200);
    }

    // DELETE - Eliminar
    public function destroy($id)
    {
        $instalacion = Instalaciones::findOrFail($id);
        $instalacion->delete();

        return response()->json(['message' => 'Eliminado correctamente']);
    }
}
