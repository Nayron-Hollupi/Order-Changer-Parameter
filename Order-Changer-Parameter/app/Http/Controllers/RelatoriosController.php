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
       
        $requester = $request->Solicitante;
        $sector = $request->Setor;
        $machine = $request->Tag_Maquina;
      
        $technician = $request->Tecnico;
        $record = $request->Registro;
        $startdate = $request->Data_inicio;
        $enddate = $request->Data_fim;
        $starttime = $request->Hora_inicio;
        $endtime =  $request->Hora_fim;
        $report = $request->Laudo;
        $problem = $request->Problemas;
        $abstract = $request->Resumo;
        $parts = $request->Pecas;
        $code = $request->Codigo;
        $estado = $request->Status;


        if ( $sector != null && $machine != null && $requester != null && $record != null && $technician != null &&  $startdate != null 
        &&  $enddate != null &&  $starttime != null &&  $endtime != null &&  $report != null
       &&   $problem != null &&  $abstract != null &&  $parts != null  && $code != null && $estado != null) {
        
            
        $relatorio = new Relatorios;
        $relatorio->Solicitante = $request->Solicitante;  
        $relatorio->Setor = $request->Setor;
        $relatorio->Tag_Maquina = $request->Tag_Maquina;
        $relatorio->Registro = $request->Registro;
        $relatorio->Tecnico = $request->Tecnico;
        $relatorio->Data_inicio = $request->Data_inicio;
        $relatorio->Data_fim = $request->Data_fim;
        $relatorio->Hora_inicio = $request->Hora_inicio;
        $relatorio->Hora_fim = $request->Hora_fim;
        $relatorio->Laudo = $request->Laudo;
        $relatorio->Problemas = $request->Problemas;
        $relatorio->Resumo = $request->Resumo;
        $relatorio->Pecas = $request->Pecas;   
        $relatorio->Codigo = $request->Codigo;
        $relatorio->Status = $request->Status;
 

        $relatorio->save();
        return response()->json(true);
    }else{
      return response()->json(false);

    }
     
    }

    public function atualizarStatus($id, Request $request){
    
        $relatorio = Relatorios::find($id);
        $relatorio->Status = $request->Status;
        $relatorio->save();
        return response()->json(true);
   

        //return response()->json(Relatorios::find($id));
    }


    public function UtilizarRelatorio($id){
        if (Relatorios::where('id', $id)->exists()) {
            $ordem = Relatorios::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($ordem);
          }
          return response(false);
        //return response()->json(Usuario::all());
    }


    public function mostrar($Status){
        if (Relatorios::where('Status', $Status)->exists()) {
            $relatorio = Relatorios::where('Status', $Status)->get()->toJson(JSON_PRETTY_PRINT);
            return response($relatorio);
          }
    
        //return response()->json(Relatorios::find($id));
    }

    public function atualizarRelatorio($id, Request $request){
          $requester = $request->Solicitante;
           $sector = $request->Setor;
           $machine = $request->Tag_Maquina;
         
           $technician = $request->Tecnico;
           $record = $request->Registro;
           $startdate = $request->Data_inicio;
           $enddate = $request->Data_fim;
           $starttime = $request->Hora_inicio;
           $endtime =  $request->Hora_fim;
           $report = $request->Laudo;
           $problem = $request->Problemas;
           $abstract = $request->Resumo;
           $parts = $request->Pecas;
           $code = $request->Codigo;
           $estado = $request->Status;

        $relatorio = Relatorios::find($id);

        if($requester != null){
            $relatorio->Solicitante = $request->Solicitante;
        } 

          if($sector != null){
        $relatorio->Setor = $request->Setor;
          } 
          
          if($machine != null){
        $relatorio->Tag_Maquina = $request->Tag_Maquina;
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
        $relatorio->Problemas = $request->Problemas;
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
    if($estado != null){
        $relatorio->Status = $request->Status;
    }

    if ( $sector != null && $machine != null && $requester != null && $record != null && $technician != null &&  $startdate != null 
     &&  $enddate != null &&  $starttime != null &&  $endtime != null &&  $report != null
    &&   $problem != null &&  $abstract != null &&  $parts != null  && $code != null && $estado != null) {
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