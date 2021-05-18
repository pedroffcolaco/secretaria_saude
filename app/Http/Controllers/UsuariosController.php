<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Usuario;
use Illuminate\Support\Facades\Redirect as RedirectTo;
//isso é o nome que tu pode dar

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::get();

        return view ('usuario.list', ['usuarios'=> $usuarios]);
    }

    public function new(){
        return view('usuario.form');
    }

    public function add(Request $request){

        $usuario = new Usuario;
        $usuario = $usuario->create( $request->all() );
        return RedirectTo::to('/usuarios');
    }

    public function edit ($id){
            $usuario = Usuario::findOrFail($id);
            return view ('usuario.form', ['usuario' => $usuario]);
    }

    public function  update ($id, Request $request){
        $usuario = Usuario::findOrFail($id);
        $usuario->update ($request->all() );

        return RedirectTo::to('/usuarios');
    }
    public function delete ($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return RedirectTo::to('/usuarios');
    }
}
