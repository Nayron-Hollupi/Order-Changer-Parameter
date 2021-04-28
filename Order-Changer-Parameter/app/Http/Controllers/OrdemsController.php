<?php

namespace App\Http\Controllers;

use App\Models\Ordems;
use Illuminate\Http\Request;

class OrdemsController extends Controller
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
    public function ordem(){
        return response()->json(Ordems::all());
    }

    public function cadastrar(Request $request){
      
        $ordem = new Ordems;
        $ordem->Setor = $request->Setor;
        $ordem->Maquina = $request->Maquina;
        $ordem->Tag = $request->Tag;
        $ordem->Problema = $request->Problema;
        $ordem->Status = $request->Status;

        $ordem->save();
        return response()->json($ordem);
    }


  

    public function mostrarOrdem($Status){
        if (Ordems::where('Status', $Status)->exists()) {
            $ordem = Ordems::where('Status', $Status)->get()->toJson(JSON_PRETTY_PRINT);
            return response($ordem, 200);
          }
    
       // return response()->json(Ordems::find($id));
    }

    public function atualizarOrdem($id, Request $request){

        $ordem = Ordems::find($id);
        $ordem->Setor = $request->Setor;
        $ordem->Maquina = $request->Maquina;
        $ordem->Tag = $request->Tag;
        $ordem->Problema = $request->Problema;
        $ordem->Status = $request->Status;


        $ordem->save();

        return response()->json($ordem);

    }

    public function deletarOrdem($id){
        $ordem = Ordems::find($id);
        $ordem->delete();
        return response()->json('Deletando com Sucesso', 200);

    }
}
