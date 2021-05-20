<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    protected $jwt;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
       
        
        $this->middleware('auth:api', [
            'except' =>['usuarioLogin','auth']
        ]);
    }

    public function usuarioLogin(Request $request){

        $this->validate($request,[
            'usuario' => 'required',
            'password' => 'required'
            
        ]);

        if(! $token = $this->jwt->claims(['usuario' => $request->usuario])->attempt($request->only('usuario', 'password'))){
            return response()->json(['Usuario não Encontrado'], 404);
        }
        
         return response()->json(compact('token'));
       
    }

    public function auth(){
        $usuario = Auth::user();
            return response()->json($usuario);
          }
       


public function usuarioLogout(){
  Auth::logout();
  return response()->json("Usuario deslogou com sucesso!");
}

  


    public function cadastrar(Request $request){
        $this->validate($request,[
            'usuario' => 'required|min:5|max:40',
            'email' => 'required',
            'registro' => 'required|min:2|max:5',
            'nivel' => 'required|min:1|max:100',
            'password' => 'required',
        ]);

        $usuario = new Usuario;
        $usuario->usuario = $request->usuario;
        $usuario->email = $request->email;
        $usuario->registro = $request->registro;
        $usuario->nivel = $request->nivel;
        $usuario->password = Hash::make($request->password);
      
     

        //Salvar usuario
        $usuario->save();
        return response()->json($usuario);
    }

    public function mostrarUsuario($nivel){
        if (Usuario::where('nivel', $nivel)->exists()) {
            $usuario = Usuario::where('nivel', $nivel)->get()->toJson(JSON_PRETTY_PRINT);
            return response($usuario, 200);
          }
    
        //    return response()->json( Usuario::where('nivel' == $id));
    }

   
    public function usuario($id){
        if (Usuario::where('id', $id)->exists()) {
            $usuario = Usuario::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($usuario, 200);
          }
        
        //return response()->json(Usuario::all());
    }
    

    public function atualizarUsuario($id, Request $request){
        $this->validate($request,[
           'usuario' => 'required',
            'email' => 'required',
            'registro' => 'required',
            'nivel' => 'required',
            'password' => 'required',
        ]);

        $usuario = Usuario::find($id);
       
      
       $usuario->usuario = $request->usuario;  
        $usuario->email = $request->email;
        $usuario->registro = $request->registro;
        $usuario->nivel = $request->nivel;
        $usuario->password = Hash::make($request->password);

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
