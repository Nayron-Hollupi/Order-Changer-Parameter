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
          'except' =>['usuarioLogin','auth','usuarioLogout','cadastrar','mostrarUsuario','usuario','deletarUsuario','atualizarUsuario']
      ]);
          
       
    }
  

    public function usuarioLogin(Request $request){

        $this->validate($request,[
            'usuario' => 'required',
            'password' => 'required'
            
        ]);

        if(! $token = $this->jwt->claims(['usuario' => $request->usuario])->attempt($request->only('usuario', 'password'))){
            return response()->json(false);
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
        
      $user = $request->usuario;
      $mail = $request->email;
      $record = $request->registro;
      $type = $request->Tipo;

      $senha = $request->password;

      if ($user != null && $mail != null && $record != null &&  $senha != null && $type != null) {
      
      $this->validate($request,[
            'usuario' => 'required|min:1|max:40',
            'email' => 'required',
            'registro' => 'required|min:1|max:5',
            'Tipo' => 'required|min:1|max:100',
            'password' => 'required',
        ]);
      
        $usuario = new Usuario;
        $usuario->usuario = $request->usuario;
        $usuario->email = $request->email;
        $usuario->registro = $request->registro;
        $usuario->Tipo = $request->Tipo;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        return response()->json(true);
        }else{
          return response()->json(false);

        }
        //Salvar usuario
       
       
   
    }

    public function mostrarUsuario($Tipo){
        if (Usuario::where('Tipo', $Tipo)->exists()) {
            $usuario = Usuario::where('Tipo', $Tipo)->get()->toJson(JSON_PRETTY_PRINT);
            return response($usuario, 200);
          }else{
          return response(false);
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
            'usuario' ,
            'email' ,
          'registro' ,
            'password' ,
            'Tipo'
        ]);

        $user = $request->usuario;
        $mail = $request->email;
        $record = $request->registro;
        $senha = $request->password;
        $type = $request->Tipo;
        $usuario = Usuario::find($id);
      if($user != null){
       $usuario->usuario = $request->usuario;  
      }
      if($mail != null){
        $usuario->email = $request->email;
      }
      if($record != null){
     $usuario->registro = $request->registro;
      }
    
      if($senha != null){
        $usuario->password = Hash::make($request->password);
      }
      if($user == null && $mail == null && $record == null &&    $senha == null && $type != null){
       
        return response()->json(false);
       
      }else{
      $usuario->save();
      return response()->json(true);
      }
    }

    public function deletarUsuario($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return response()->json(true);

    }
 
}
