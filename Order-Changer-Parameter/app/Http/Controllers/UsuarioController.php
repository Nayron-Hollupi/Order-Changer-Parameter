<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function usuario(){
        return response()->json(Usuario::all());
    }

    public function cadastrar(Request $request){
        $this->validate($request,[
            'usuario' => 'required|min:5|max:40',
            'nivel' => 'required|min:1|max:100',
            'password' => 'required',
            'verificado' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->usuario = $request->usuario;
        $usuario->nivel = $request->nivel;
        $usuario->password = $request->password;
        $usuario->verificado = $request->verificado;


        //Salvar usuario
        $usuario->save();
        return response()->json($usuario);
    }

    public function mostrarUsuario($id){
        return response()->json(Usuario::find($id));
    }

    public function atualizarUsuario($id, Request $request){

        $usuario = Usuario::find($id);
        $usuario->email = $request->email;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;

        //Salvar novamento
        $usuario->save();

        return response()->json($usuario);

    }

    public function deletarUsuario($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return response()->json('Deletando com Sucesso', 200);

    }
 
}
