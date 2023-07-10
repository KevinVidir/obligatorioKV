<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



   
    
    Route::get('/login', function () {
        return view('login');
    });
   
    Route::get('/crearPersona', function () {
        return view('formularioUsuario');
    });
    Route::post('/crearPersona',[UserController::class, "Insertar"]);

Route::get('/',[UserController::class, "Listar"]);
    
    Route::get('/register', function () {
        return view('register');
    });
    
    Route::post('/login',[UserController::class,"Login"]);
    Route::post('/register',[UserController::class,"Register"]);
    Route::get('/logout',[UserController::class,"Logout"]);