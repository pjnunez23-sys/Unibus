<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutas;


class RutasController extends Controller
{
     // GET todas las rutas
    public function index()
    {
        return Rutas::all();
    }

    // POST crear una ruta
    public function store(Request $request)
    {
        $ruta = Rutas::create($request->all());
        return response()->json($ruta, 201);
    }

    // GET una ruta
    public function show($id)
    {
        return Rutas::findOrFail($id);
    }

    // PATCH actualizar
    public function update(Request $request, $id)
    {
        $ruta = Rutas::findOrFail($id);
        $ruta->update($request->all());
        return response()->json($ruta, 200);
    }

    // DELETE eliminar
    public function destroy($id)
    {
        $ruta = Rutas::findOrFail($id);
        $ruta->delete();
        return response()->json(['message' => 'Ruta eliminada correctamente'], 200);
    }
}
