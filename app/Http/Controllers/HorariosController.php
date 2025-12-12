<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
  // GET - listar todos
    public function index()
    {
        return Horarios::all();
    }

    // POST - crear uno
    public function store(Request $request)
    {
        $validated = $request->validate([
            'camion_id' => 'required|exists:camiones,id',
            'hora_salida' => 'required|date_format:H:i',
            'hora_llegada' => 'required|date_format:H:i',
            'dias' => 'required|string'
        ]);

        $horario = Horarios::create($validated);

        return response()->json($horario, 201);
    }

    // GET por ID
    public function show($id)
    {
        return Horarios::findOrFail($id);
    }

    // PATCH - actualizar
    public function update(Request $request, $id)
    {
        $horario = Horarios::findOrFail($id);

        $horario->update($request->all());

        return response()->json($horario, 200);
    }

    // DELETE
    public function destroy($id)
    {
        $horario = Horarios::findOrFail($id);
        $horario->delete();

        return response()->json(null, 204);
    }  //
}
