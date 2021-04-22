<?php

namespace App\Http\Controllers;

use App\Models\Ordem;
use Illuminate\Http\Request;

class OrdemController extends Controller
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
        return response()->json(Ordem::all());
    }

    public function cadastrar(Request $request){
      
        $ordem = new Ordem;
        $ordem->Setor = $request->Setor;
        $ordem->Maquina = $request->Maquina;
        $ordem->Tag = $request->Tag;
        $ordem->Problema = $request->Problema;
        $ordem->Status = $request->Status;

        $ordem->save();
        return response()->json($ordem);
    }

    public function mostrarOrdem($id){
        return response()->json(Ordem::find($id));
    }

    public function atualizarOrdem($id, Request $request){

        $ordem = Ordem::find($id);
        $ordem->Setor = $request->Setor;
        $ordem->Maquina = $request->Maquina;
        $ordem->Tag = $request->Tag;
        $ordem->Problema = $request->Problema;
        $ordem->Status = $request->Status;


        $ordem->save();

        return response()->json($ordem);

    }

    public function deletarOrdem($id){
        $ordem = Ordem::find($id);
        $ordem->delete();
        return response()->json('Deletando com Sucesso', 200);

    }
}
