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
       
        $sector = $request->Setor;
        $machine = $request->Tag_Maquina;
        $requester = $request->Solicitante;
        $technician = $request->Tecnico;
        $record = $request->Registro;
        $startdate = $request->Data_inicio;
    
        $enddate = $request->Data_fim;
        $starttime = $request->Hora_inicio;
        $endtime =  $request->Hora_fim;
        $report = $request->Laudo;
        $problem = $request->Problema;
        $abstract = $request->Resumo;
        $parts = $request->Pecas;
        $code = $request->Codigo;



        if ( $sector != null && $machine != null && $requester != null && $technician != null && $record != null &&  $startdate != null 
         &&  $enddate != null &&  $starttime != null &&  $endtime != null &&  $report != null
        &&   $problem != null &&  $abstract != null &&  $parts != null && $code != null  ) {


            
        $relatorio = new Relatorios;
        $relatorio->Setor = $request->Setor;
        $relatorio->Tag_Maquina = $request->Tag_Maquina;
        $relatorio->Solicitante = $request->Solicitante;
        $relatorio->Tecnico = $request->Tecnico;
        $relatorio->Registro = $request->Registro;
        $relatorio->Data_inicio = $request->Data_inicio;
       
        $relatorio->Data_fim = $request->Data_fim;
        $relatorio->Hora_inicio = $request->Hora_inicio;
        $relatorio->Hora_fim = $request->Hora_fim;
        $relatorio->Laudo = $request->Laudo;
        $relatorio->Problema = $request->Problema;
        $relatorio->Resumo = $request->Resumo;
        $relatorio->Pecas = $request->Pecas; 
        $relatorio->Codigo = $request->Codigo;   
  

        $relatorio->save();
        return response()->json(true);
    }else{
      return response()->json(false);

    }
     
    }

    public function mostrar($id){
        if (Relatorios::where('id', $id)->exists()) {
            $relatorio = Relatorios::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($relatorio);
          }
    
        //return response()->json(Relatorios::find($id));
    }

    public function atualizarRelatorio($id, Request $request){
           $sector = $request->Setor;
           $machine = $request->Tag_Maquina;
           $requester = $request->Solicitante;
           $technician = $request->Tecnico;
           $record = $request->Registro;
           $startdate = $request->Data_inicio;
           $enddate = $request->Data_fim;
           $starttime = $request->Hora_inicio;
           $endtime =  $request->Hora_fim;
           $report = $request->Laudo;
           $problem = $request->Problema;
           $abstract = $request->Resumo;
           $parts = $request->Pecas;
           $code = $request->Codigo;

        $relatorio = Relatorios::find($id);
          if($sector != null){
        $relatorio->Setor = $request->Setor;
          } 
          
          if($machine != null){
        $relatorio->Tag_Maquina = $request->Tag_Maquina;
    }


    if($requester != null){
        $relatorio->Solicitante = $request->Solicitante;
    } 
    
    if($record != null){
        $relatorio->Registro = $request->Registro;
    } 
    
    if( $technician != null){
        $relatorio->Tecnico = $request->Tecnico;
    }
    
    if($startdate != null){
        $relatorio->Data_inicio = $request->Data_inicio;
    } 
    
    if($enddate != null){
        $relatorio->Data_fim = $request->Data_fim;
    }
    
    if($starttime != null){
        $relatorio->Hora_inicio = $request->Hora_inicio;
    }
    
    if($endtime!= null){
        $relatorio->Hora_fim = $request->Hora_fim;
    }
    
    if($report != null){
        $relatorio->Laudo = $request->Laudo;
    } 
    
    if($problem  != null){
        $relatorio->Problema = $request->Problema;
    } 
    
    if($abstract != null){
        $relatorio->Resumo = $request->Resumo;
    }
    
    if($parts != null){
        $relatorio->Pecas = $request->Pecas;   
    } 
    
    if($code != null){
        $relatorio->Codigo = $request->Codigo;
    }

    if ( $sector != null && $machine != null && $requester != null && $record != null && $technician != null &&  $startdate != null 
     &&  $enddate != null &&  $starttime != null &&  $endtime != null &&  $report != null
    &&   $problem != null &&  $abstract != null &&  $parts != null  && $code != null) {
        return response()->json(false);
    }else{
        $relatorio->save();
        return response()->json(true);

    }
    }

    public function deletarRelatorios($id){
        $relatorio = Relatorios::find($id);
        $relatorio->delete();
        return response()->json(true);

    }
 
}