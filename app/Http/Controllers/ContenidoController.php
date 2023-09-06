<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contenido;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    public function index(){
        $contenidos = Contenido::paginate();
        return view('inicio', compact('contenidos'));
    }

    public function create(){
        return view('crearpublic');
    }

    public function modify($id){
        return view('editcontent', ['id' => $id]);
    }

    public function delete($id){
        return "eliminar contenido ". $id;
    }

    public function ver($id){
        $public = Contenido::find($id);
        return view('verpublic', compact('public'));
    }
}
