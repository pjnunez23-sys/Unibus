<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstalacionesController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\CamionesController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\ParadasController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('instalaciones', InstalacionesController::class);
Route::apiResource('rutas', RutasController::class);
Route::apiResource('Camiones', CamionesController::class);
Route::apiResource('horarios', HorariosController::class);
Route::apiResource('Paradas', ParadasController::class);
