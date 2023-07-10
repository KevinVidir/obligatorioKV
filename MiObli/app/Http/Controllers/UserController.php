<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use  App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;





class UserController extends Controller
{
    public function Register(Request $request){
        $u = new User();
        $u -> nombre = $request -> post("nombre");
        $u -> correo = $request -> post("correo");
        $u -> contraseña = Hash::make($request -> post("contraseña"));

        $u -> save();

        return redirect("/login")-> with("created",true);

    }

    public function Login(Request $request){
        $credentials = $request->only('correo', 'contraseña');
        if (Auth::attempt($credentials)) 
            return redirect("/");
        return redirect("/login")->with("failed",true);
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/login")->with("logout",true);
    }
  
}