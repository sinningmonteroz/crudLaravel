<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function create(){
        return view('registro');
    }

    public function login(){
        return view('login');
    }
    public function ver($usuario){
        return view('perfil', ['usuario' => $usuario]);
    }
    
    public function modify($usuario){
        return view('edituser', ['usuario' => $usuario]);
    }

    public function delete($usuario){
        return "eliminar usuario ". $usuario;
    }
}
