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
    public function ordems(){
        return response()->json(Ordems::all());
    }

    public function cadastrar(Request $request){
       
        $ordem = new Ordems;
        $ordem->Setor = $request->Setor;
        $ordem->Tag = $request->Tag;
        $ordem->Problemas = $request->Problemas;
        $ordem->Status = $request->Status;

        $ordem->save();
        return response()->json($ordem);
    }

    public function mostrar($Status){
        if (Ordems::where('Status', $Status)->exists()) {
            $ordem = Ordems::where('Status', $Status)->get()->toJson(JSON_PRETTY_PRINT);
            return response($ordem);
          }
    

        //return response()->json(Ordems::find($id));
    }

    public function atualizar($id, Request $request){

        $ordem = Ordems::find($id);
        $ordem->Setor = $request->Setor;
        $ordem->Tag = $request->Tag;
        $ordem->Problemas = $request->Problemas;
        $ordem->Status = $request->Status;


        //Salvar novamento
        $ordem->save();

        return response()->json($ordem);

    }

    public function deletar($id){
        $ordem = Ordems::find($id);
        $ordem->delete();
        return response()->json('Deletando com Sucesso', 200);

    }
 
}
