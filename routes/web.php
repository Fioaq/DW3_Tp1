<?php

use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CrearMascota',[MascotaController::class,'CrearMascota']);
Route::get('/VerMascotas',[MascotaController::class,'VerMascotas']);
Route::get('/VerMascota/{id}',[MascotaController::class,'VerMascota']);
Route::get('/EliminarMascota/{id}',[MascotaController::class,'EliminarMascota']);
Route::get('/ModificarMascota',[MascotaController::class,'ModificarMascota']);
