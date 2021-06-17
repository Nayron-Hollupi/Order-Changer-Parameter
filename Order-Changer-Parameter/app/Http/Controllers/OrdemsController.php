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
    public function ordems($Status){
        if (Ordems::where('Status', $Status)->exists()) {
            $id = Ordems::where('Status', $Status)->get()->toJson(JSON_PRETTY_PRINT);
            return response($id);
          }
          
      //  return response()->json(Ordems::all());
    }

    public function cadastrar(Request $request){
        $requester = $request->Solicitante;
        $sector = $request->Setor;
        $marcacao = $request->Tag_Maquina;
        $problem = $request->Problemas;
        $estado = $request->Status;

        if ($requester != null &&$sector != null && $marcacao != null &&  $problem != null &&  $estado != null  ) {
        $ordem = new Ordems;
        $ordem->Solicitante = $request->Solicitante;
        $ordem->Setor = $request->Setor;
        $ordem->Tag_Maquina = $request->Tag_Maquina;
        $ordem->Problemas = $request->Problemas;
        $ordem->Status = $request->Status;

        $ordem->save();
        return response()->json(true);
        }else{

            return response()->json(false);
        }
    }

    public function UtilizarRelatorio($id){
        if (Ordems::where('id', $id)->exists()) {
            $ordem = Ordems::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($ordem);
          }
          return response(false);
        //return response()->json(Usuario::all());
    }
    public function mostrar($Status){
        if (Ordems::where('Status', $Status)->exists()) {
            $ordem = Ordems::where('Status', $Status)->get()->toJson(JSON_PRETTY_PRINT);
            return response($ordem);
          }
    

        //return response()->json(Ordems::find($id));
    }
    public function atualizarStatus($id, Request $request){

        $ordem = Ordems::find($id);
        $ordem->Status = $request->Status;
        //Salvar Status
        $ordem->save();

        return response()->json($ordem);

    }
    public function atualizar($id, Request $request){

        $ordem = Ordems::find($id);
        $ordem->Solicitante = $request->Solicitante;
        $ordem->Setor = $request->Setor;
        $ordem->Tag_Maquina = $request->Tag_Maquina;
        $ordem->Problemas = $request->Problemas;
        $ordem->Status = $request->Status;


        //Salvar novamento
        $ordem->save();

        return response()->json($ordem);

    }

    public function deletar($id){
        $ordem = Ordems::find($id);
        $ordem->delete();
        return response()->json(true);

    }
 
}
