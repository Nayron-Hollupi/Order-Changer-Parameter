<?php

namespace App\Http\Controllers;

use App\Models\Relatorios;
use Illuminate\Http\Request;

class RelatoriosController extends Controller
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
    public function relatorios(){
        return response()->json(Relatorios::all());
    }

    public function cadastrar(Request $request){
       
        $relatorio = new Relatorios;
        $relatorio->Setor = $request->Setor;
        $relatorio->Maquina = $request->Maquina;
        $relatorio->Tag = $request->Tag;
        $relatorio->Registro = $request->Registro;
        $relatorio->Data_inicio = $request->Data_inicio;
        $relatorio->Data_fim = $request->Data_fim;
        $relatorio->Laudo = $request->Laudo;
        $relatorio->Problema = $request->Problema;
        $relatorio->Resumo = $request->Resumo;
        $relatorio->Pecas = $request->Pecas; 
        $relatorio->Status =$request->Status;       
  

        $relatorio->save();
        return response()->json($relatorio);
    }

    public function mostrar($id){
        return response()->json(Relatorios::find($id));
    }

    public function atualizarRelatorios($id, Request $request){

        $relatorio = Relatorios::find($id);
        $relatorio->Setor = $request->Setor;
        $relatorio->Maquina = $request->Maquina;
        $relatorio->Tag = $request->Tag;
        $relatorio->Registro = $request->Registro;
        $relatorio->Data_inicio = $request->Data_inicio;
        $relatorio->Data_fim = $request->Data_fim;
        $relatorio->Laudo = $request->Laudo;
        $relatorio->Problema = $request->Problema;
        $relatorio->Resumo = $request->Resumo;
        $relatorio->Pecas = $request->Pecas;   
        $relatorio->Status =$request->Status;
        
        $relatorio->save();
        return response()->json($relatorio);
    }

    public function deletarRelatorios($id){
        $relatorio = Relatorios::find($id);
        $relatorio->delete();
        return response()->json('Deletando com Sucesso', 200);

    }
 
}
