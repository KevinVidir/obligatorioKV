<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use  App\Models\User;

class UserController extends Controller
{
    public function Insertar(Request $request){
        $p = new User;

        $p -> nombre = $request -> post("nombre");
        $p -> correo = $request -> post("correo");

        $p -> save();

        return view("formularioUsuario",[
            "creado" => true
        ]);
    }
    public function Listar(Request $request){
        $personas = User::all();
        return view("listarPersonas",[
            "personas" => $personas
        ]);
}
}