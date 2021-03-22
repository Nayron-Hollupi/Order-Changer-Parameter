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
    public function maquinas(){
        return response()->json(Maquinas::all());
    }

    public function cadastrar(Request $request){
       
        $maquina = new Maquinas;
        $maquina->Setor = $request->Setor;
        $maquina->Tag = $request->Tag;
        $maquina->Maquina = $request->Maquina;
  

        $maquina->save();
        return response()->json($maquina);
    }

    public function mostrarMaquina($id){
        return response()->json(Maquinas::find($id));
    }

    public function atualizarMaquinas($id, Request $request){

        $maquina = Maquinas::find($id);
        $maquina->Setor = $request->Setor;
        $maquina->Tag = $request->Tag;
        $maquina->Maquina = $request->Maquina;

        //Salvar novamento
        $maquina->save();

        return response()->json($maquina);

    }

    public function deletarMaquinas($id){
        $maquina = Maquinas::find($id);
        $maquina->delete();
        return response()->json('Deletando com Sucesso', 200);

    }
 
}
