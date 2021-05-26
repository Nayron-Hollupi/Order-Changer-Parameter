<?php

namespace App\Http\Controllers;

use App\Models\Maquinas;
use Illuminate\Http\Request;

class MaquinasController extends Controller
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
    public function maquinas($id){
           if (Maquinas::where('id', $id)->exists()) {
           $maquina = Maquinas::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($maquina, 200);
          }
        
        //return response()->json(Maquinas::all());
    }

    public function cadastrar(Request $request){
        $sector = $request->Setor;
        $marcacao = $request->Tag;
        $machine = $request->Maquina;

        if ($sector != null && $marcacao != null && $machine != null  ) {
        $maquina = new Maquinas;
        $maquina->Setor = $request->Setor;
        $maquina->Tag = $request->Tag;
        $maquina->Maquina = $request->Maquina;
  

        $maquina->save();
        return response()->json(true);
        }else{
            return response()->json(false);    
        }
    }

    public function mostrarMaquina(){
   
       return response()->json(Maquinas::all());
        //return response()->json(Maquinas::find($id));
    }
   
    public function atualizarMaquinas($id, Request $request){
        
      
        $sector = $request->Setor;
        $marcacao = $request->Tag;
        $machine = $request->Maquina;
         
        $maquina = Maquinas::find($id);
        if($sector != null){
        $maquina->Setor = $request->Setor;
        }if($marcacao != null){
        $maquina->Tag = $request->Tag;
        }if($machine !=null){
        $maquina->Maquina = $request->Maquina;
        }

        if($sector == null && $marcacao == null && $machine == null ){
            return response()->json(false);
           
          }else{
            $maquina->save();

            return response()->json(true);
         }
       

    }

    public function deletarMaquinas($id){
        $maquina = Maquinas::find($id);
        $maquina->delete();
        return response()->json('Deletando com Sucesso', 200);

    }
 
}
