<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;



    Route::get('/personas', function () {
        return view('formularioPersonas');
    });
    
    Route::post('/personas',[PersonaController::class, "Insertar"]);
