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
        $relatorio->Hora_inicio = $request->Hora_inicio;
        $relatorio->Hora_fim = $request->Hora_fim;
        $relatorio->Laudo = $request->Laudo;
        $relatorio->Problema = $request->Problema;
        $relatorio->Resumo = $request->Resumo;
        $relatorio->Pecas = $request->Pecas; 
        $relatorio->Status =$request->Status;       
  

        $relatorio->save();
        return response()->json($relatorio);
    }

    public function mostrar($id){
        if (Relatorios::where('id', $id)->exists()) {
            $relatorio = Relatorios::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($relatorio);
          }
    
        //return response()->json(Relatorios::find($id));
    }

    public function atualizarRelatorios($id, Request $request){
           $sector = $request->Setor;
           $machine = $request->Maquina;
           $marcacao = $request->Tag;
           $record = $request->Registro;
           $startdate = $request->Data_inicio;
           $enddate = $request->Data_fim;
           $starttime = $request->Hora_inicio;
           $endtime =  $request->Hora_fim;
           $report = $request->Laudo;
           $problem = $request->Problema;
           $abstract = $request->Resumo;
           $parts = $request->Pecas;
           $estado =  $request->Status; 

        $relatorio = Relatorios::find($id);
          if($sector != null){
        $relatorio->Setor = $request->Setor;
          } if($machine != null){
        $relatorio->Maquina = $request->Maquina;
    } if($marcacao != null){
        $relatorio->Tag = $request->Tag;
    } if($record != null){
        $relatorio->Registro = $request->Registro;
    } if($startdate != null){
        $relatorio->Data_inicio = $request->Data_inicio;
    } if($enddate != null){
        $relatorio->Data_fim = $request->Data_fim;
    } if($starttime != null){
        $relatorio->Hora_inicio = $request->Hora_inicio;
    } if($endtime!= null){
        $relatorio->Hora_fim = $request->Hora_fim;
    } if($report != null){
        $relatorio->Laudo = $request->Laudo;
    } if($problem  != null){
        $relatorio->Problema = $request->Problema;
    } if($abstract != null){
        $relatorio->Resumo = $request->Resumo;
    } if($parts != null){
        $relatorio->Pecas = $request->Pecas;   
    } if($estado != null){
        $relatorio->Status = $request->Status;
    }
        $relatorio->save();
        return response()->json($relatorio);
    }

    public function deletarRelatorios($id){
        $relatorio = Relatorios::find($id);
        $relatorio->delete();
        return response()->json('Deletando com Sucesso', 200);

    }
 
}