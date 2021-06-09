<template>
  <div class="content">
    <!----------------------------------------bread crumb---------------------------------------------------------->
         <header>
           <nav>
    <ul>  
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>


   <!-----------------------------------bread crumbs from  order  page-------------------------------------------------->
      <li v-if="PageOrder">
        <b >ORDENS</b>
      </li>


      <!-----------------------------------bread crumbs from the order open page-------------------------------------------------->
        <li v-if="PageToOpen">
        <a @click="ToOpen()" >Ordens</a>
      </li>
      <li v-if="PageToOpen">
        <b >Abrir Ordem</b>
      </li>

      <!-----------------------------------bread crumbs from  open order page-------------------------------------------------->
       <li  v-if="PageOpen">
        <a @click="Open()">Ordens</a>
      </li>
      <li  v-if="PageOpen">
        <b >Ordens Abertas</b>
      </li>

   <!-----------------------------------bread crumbs from  Progress orders page-------------------------------------------------->
  <li v-if="PageProgress">
        <a @click="Progress()">Ordens</a>
      </li>
      <li v-if="PageProgress">
        <b >Ordens em andamento</b>
      </li>

  <!-----------------------------------bread crumbs from  Write report page-------------------------------------------------->  
        <li  v-if="PageWrite">
        <a @click="ToWrite()">Ordens</a>
      </li>
        <li  v-if="PageWrite">
        <a @click="ProgressWrite()">Ordens em andamento</a>
      </li>
    
      <li  v-if="PageWrite">
        <b >Escrever Relatorio</b>
      </li>

 <!-----------------------------------bread crumbs from  finalized orders page-------------------------------------------------->
          <li v-if="PageFinalized">
        <a  @click="Finalized()">Ordens</a>
      </li>
      <li v-if="PageFinalized" >
        <b >Ordens Finalizadas</b>
      </li>
      

  <!-----------------------------------bread crumbs from  View report page-------------------------------------------------->     
       <li v-if="View">
        <a @click="ToOpenview()" >Ordens</a>
      </li>
 <li v-if="View" >
        <a  @click="FinalizedView()">Ordens Finalizadas</a>
      </li>
 <li  v-if="View">
        <b >Visualizar Relatorio</b>
      </li>  

<!-----------------------------------bread crumbs from  Edit report page--------------------------------------------------> 
        <li v-if="EditReport">
        <a @click="ToOpen()" >Ordens</a>
      </li>
      <li v-if="EditReport" >
        <a  @click="FinalizedView()">Ordens Finalizadas</a>
      </li>  
        <li  v-if="EditReport">
        <a @click="Edit()">Visualizar Relatorio</a>
      </li>  
         <li  v-if="EditReport">
        <b  >Editar Relatorio</b>
      </li>  
    </ul>
  </nav>
    </header>

 <!--------------------------Order Page----------------------------------->
     <div v-if="PageOrder">   
    <div class="md-layout">
      <div class="md-layout-item">
   
      <md-card>
        <md-card-header data-background-color="green">
          <h4 class="title" style="text-align:center">Ordens</h4>
        </md-card-header>
        <md-card-content>
          <div class="md-layout">
            <div class="md-layout-item md-size-100">
                <md-button class="md-success" style="width:300px" @click="ToOpen()" >Abrir Ordem</md-button> 
              </div>
              <div class="md-layout-item md-size-100">
               <md-button class="md-danger" style="width:300px" @click="Open()" >Ordens Abertas</md-button>
              </div>
             <div class="md-layout-item md-size-100">
                 
                <md-button class="md-warning"  style="width:300px" @click="Progress()">Ordens em andamento</md-button>
             </div>
                <div class="md-layout-item md-size-100">
             <md-button class="md-info" style="width:300px" @click="Finalized()">Ordens Finalizadas</md-button>
                </div>
             
           
          </div>
        </md-card-content>
      </md-card>
      </div>
    </div>
     </div>





<!---------------------------------------------Page to Open Order--------------------------->
  <div v-if="PageToOpen">
  <form>
    <md-card>
      <md-card-header  data-background-color="green">
        <h4 class="title" style="text-align:center">Abrir Ordem</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
  <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
          <div class="md-layout-item md-small-size-100 md-size-50">       
        <md-field>
          <label>Digite o Setor</label>
          
                    <md-input v-model="Setor" type="text"></md-input>
                
        </md-field>
          </div>

           <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
          <div class="md-layout-item md-small-size-100 md-size-50">
           <md-field>
             <label>Digite  Maquina / Tag</label>
             <md-input v-model="Tag_Maquina" type="text"></md-input>
         
        </md-field>
          </div>
           
                <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   <div class="md-layout-item md-small-size-100 md-size-25">
  </div>

          <div class="md-layout-item md-small-size-100 md-size-50 ">
            <md-field>
              <label>Digite o Problema</label>
              <md-input v-model="Problemas" type="text"></md-input>
            </md-field>
          </div>
                        <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
  <div v-if="Starte" class="md-layout-item md-small-size-100 md-size-50 ">
            <md-field>
              <label>Digite o Status</label>
              <md-input v-model="Status"  type="text"></md-input>
            </md-field>
          </div>
      
           <div class="md-layout-item md-small-size-100 md-size-25">
               <md-button   @click="cadastrar()" class="md-raised md-info">Criar Ordem</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>
 
  </form>
  </div>








<!--------------------------------------Open Order Page-------------------------------------->
  <div  v-if="PageOpen">
       <div class="md-layout">
  <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="red">
            <h4 class="title" style="text-align:center">Ordens abertas</h4>
          </md-card-header>
          <md-card-content>
           <md-table  v-for="(ordem,id) in ordemOpen" :key="id" >
            <md-table-row slot="md-table-row" > 
        <md-table-cell md-label="id">{{ ordem.id }}</md-table-cell>
        <md-table-cell md-label="Setor">{{ ordem.Setor }}</md-table-cell>
        <md-table-cell md-label="Tag">{{ordem.Tag_Maquina }}</md-table-cell>
   <md-table-cell >     <sidebar-link to="">
       <md-button type="button" @click="executar(ordem.id)" class="md-success "> Executar </md-button>
        </sidebar-link></md-table-cell>  
  </md-table-row>
  </md-table>
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>







<!--------------------------------------Progress Orders Page---------------------------------->
  <div  v-if="PageProgress">
        <div class="md-layout">
  <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="orange">
            <h4 class="title" style="text-align:center">Ordens em andamento</h4>
          </md-card-header>
          <md-card-content>
           <md-table  >
            <md-table-row slot="md-table-row"  v-for="(ordem,id) in ordemProgress" :key="id"  > 
          
        <md-table-cell md-label="id" >{{ ordem.id }}</md-table-cell>
        <md-table-cell md-label="Setor">{{ ordem.Setor }}</md-table-cell>
        <md-table-cell md-label="Tag">{{ordem.Tag_Maquina }}</md-table-cell>
   <md-table-cell   >     <sidebar-link to="">
       <md-button type="button" @click="write(ordem.id)" class="md-warning">Escrever Relatorio</md-button>
        </sidebar-link></md-table-cell>
               
  </md-table-row>
  </md-table>
             
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>








<!----------------------------------------Write Report------------------------------------------->
 <div v-if="PageWrite">
 <form>
    <md-card>
      <md-card-header  data-background-color="blue">
        <h4 class="title" style="text-align:center">Escrever Relatorio</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
         
  
          <div class="md-layout-item md-small-size-100 md-size-40" >       
        <md-field>
          <label>Digite o Setor </label>
                    <md-input v-model="Setor" type="text"></md-input>              
        </md-field>
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-40">
           <md-field>
             <label>Digite o Maquina</label>
             <md-input v-model="Tag_Maquina" type="text"></md-input>
        </md-field>
          </div>
  
    
    
   
         <div class="md-layout-item md-small-size-100 md-size-40">
           <md-field>
             <label>Digite o Registro</label>
             <md-input v-model="Registro" type="text"></md-input>    
        </md-field>
          </div>

<div class="md-layout-item md-small-size-100 md-size-30">
           <md-field>
             <label>Digite o Data de inicio </label>
             <md-input v-model="Data_inicio" type="text"></md-input>    
        </md-field>
          </div>
    <div class="md-layout-item md-small-size-100 md-size-20">
           <md-field>
             <label>Digite o Hora de inicio</label>
             <md-input v-model="Hora_inicio" type="text"></md-input>    
        </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-30">
           <md-field>
             <label>Digite o Data do final</label>
             <md-input v-model="Data_fim" type="text"></md-input>    
        </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-20">
           <md-field>
             <label>Digite o Hora final</label>
             <md-input v-model="Hora_fim" type="text"></md-input>    
        </md-field>
          </div>
        
    <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   
 <div class="md-layout-item md-small-size-100 md-size-80">
           <md-field>
             <label>Digite o Laudo</label>
             <md-textarea v-model="Laudo" type="text"></md-textarea>   
        </md-field>
          </div>
    
          <div class="md-layout-item md-small-size-100 md-size-80 ">
            <md-field>
              <label>Digite o Problema</label>
                <md-textarea v-model="Problema" type="text"></md-textarea>
             
            </md-field>
          </div>
    <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
  
            <div class="md-layout-item md-small-size-100 md-size-80 ">
            <md-field>
              <label>Digite o Resumo</label>
              <md-textarea v-model="Resumo" type="text"></md-textarea>
            
            </md-field>
          </div>
      <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   
    <div class="md-layout-item md-small-size-100 md-size-80 ">
            <md-field>
              <label>Digite as Peças Utilizadas</label>
               <md-textarea v-model="Pecas" type="text"></md-textarea>
           
            </md-field>
          </div>

      <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
 
           <div class="md-layout-item md-small-size-100 md-size-25" v-for="(write,id) in writee" :key="id" >
               <md-button   @click="register(write.id)" class="md-raised md-info">Criar Ordem</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>
 
  </form>
 </div>






<!---------------------------------------Finalized Orders Page------------------------------->    
  <div  v-if="PageFinalized">
    <div class="md-layout">
  <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="blue">
            <h4 class="title" style="text-align:center">Ordens Finalizadas</h4>
          </md-card-header>
            <md-card-content>
           <md-table >
            <md-table-row slot="md-table-row"  v-for="(ordem,id) in ordems" :key="id"  > 
        <md-table-cell md-label="id">{{ ordem.id }}</md-table-cell>
        <md-table-cell md-label="Setor">{{ ordem.Setor }}</md-table-cell>
        <md-table-cell md-label="Tag">{{ordem.Tag }}</md-table-cell>
   <md-table-cell >     
       <md-button type="button"  @click="PageView(ordem.id)" class="md-success">Visualiar relatorio</md-button>
        </md-table-cell>
        <md-table-cell ><md-button class="md-danger" @click="Delete(ordem.id)">Excluir</md-button></md-table-cell>  
  </md-table-row></md-table>
             
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>












 <!-----------------------------------------------------------View Report----------------------------------------------------------->
    

    <div v-if="View">
     <div class="md-layout">
          
        <md-card>
          <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
          <md-card-header data-background-color="blue">
            <h4 class="title" style="text-align:center">Relatorio</h4>
          </md-card-header>
          </div>
          <md-card-content>  
   <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
   <md-table>
      <md-table-row slot="md-table-row">
        <md-table-head >Setor</md-table-head>
        <md-table-head>Maquina/Tag</md-table-head>
        <md-table-head>Solicitante</md-table-head>
        <md-table-head>Tecnico</md-table-head>
        <md-table-head>Registro</md-table-head>
    
      </md-table-row >
      <md-table-row v-for="(rel,id) in relatorios" :key="id" slot="md-table-row">
        <md-table-cell >{{rel.Setor}}</md-table-cell>
        <md-table-cell>{{rel.Tag_Maquina}}</md-table-cell>
        <md-table-cell>Não possui ainda</md-table-cell>
        <md-table-cell>Nayron</md-table-cell>
         <md-table-cell>{{rel.Registro}}</md-table-cell>
      </md-table-row>
       
        <md-table-row >
        <md-table-cell ></md-table-cell>
 <md-table-cell ></md-table-cell>
  <md-table-cell ></md-table-cell>
   <md-table-cell ></md-table-cell>
    <md-table-cell ></md-table-cell>
      </md-table-row>
    </md-table>
   </div>


    <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
   <md-table>
      <md-table-row slot="md-table-row">
        <md-table-head >Data de inicio</md-table-head>
        <md-table-head>Hora de inicio</md-table-head>
        <md-table-head>Data do Termino</md-table-head>
        <md-table-head>Hora do Termino</md-table-head>
      
    
      </md-table-row >
      <md-table-row v-for="(rel,id) in relatorios" :key="id" slot="md-table-row">
        <md-table-cell >{{rel.Data_inicio}}</md-table-cell>
        <md-table-cell >{{rel.Hora_inicio}}</md-table-cell>
        <md-table-cell >{{rel.Data_fim}}</md-table-cell>
        <md-table-cell >{{rel.Hora_fim}}</md-table-cell>
      </md-table-row>
        <md-table-row >
        <md-table-cell ></md-table-cell>
 <md-table-cell ></md-table-cell>
  <md-table-cell ></md-table-cell>
   <md-table-cell ></md-table-cell>
    <md-table-cell ></md-table-cell>
      </md-table-row>
    </md-table>
   </div>

   
    <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
   <md-table>
      <md-table-row slot="md-table-row">
        <md-table-head style="text-align:center" >Laudo</md-table-head>
      </md-table-row >
      <md-table-row v-for="(rel,id) in relatorios" :key="id" slot="md-table-row">
        <md-table-cell >{{rel.Laudo}}</md-table-cell>
      </md-table-row>

 <md-table-row >
        <md-table-cell ></md-table-cell>
 <md-table-cell ></md-table-cell>
  <md-table-cell ></md-table-cell>
   <md-table-cell ></md-table-cell>
    <md-table-cell ></md-table-cell>
      </md-table-row>

    </md-table>
   </div>


   <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
   <md-table>
      <md-table-row slot="md-table-row">
        <md-table-head style="text-align:center" >Problema</md-table-head>
      </md-table-row >
      <md-table-row v-for="(rel,id) in relatorios" :key="id" slot="md-table-row">
        <md-table-cell >{{rel.Problema}}</md-table-cell>
      </md-table-row>

 <md-table-row >
        <md-table-cell ></md-table-cell>
 <md-table-cell ></md-table-cell>
  <md-table-cell ></md-table-cell>
   <md-table-cell ></md-table-cell>
    <md-table-cell ></md-table-cell>
      </md-table-row>

    </md-table>
   </div>

<div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
   <md-table>
      <md-table-row slot="md-table-row">
        <md-table-head style="text-align:center" >Resumo</md-table-head>
      </md-table-row >
      <md-table-row v-for="(rel,id) in relatorios" :key="id" slot="md-table-row">
        <md-table-cell >{{rel.Resumo}}</md-table-cell>
      </md-table-row>

 <md-table-row >
        <md-table-cell ></md-table-cell>
 <md-table-cell ></md-table-cell>
  <md-table-cell ></md-table-cell>
   <md-table-cell ></md-table-cell>
    <md-table-cell ></md-table-cell>
      </md-table-row>

    </md-table>
   </div>


   <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
   <md-table>
      <md-table-row slot="md-table-row">
        <md-table-head style="text-align:center" >Peças Utilizadas</md-table-head>
      </md-table-row >
      <md-table-row v-for="(rel,id) in relatorios" :key="id" slot="md-table-row">
        <md-table-cell >{{rel.Pecas}}</md-table-cell>
      </md-table-row>

 <md-table-row >
        <md-table-cell ></md-table-cell>
 <md-table-cell ></md-table-cell>
  <md-table-cell ></md-table-cell>
   <md-table-cell ></md-table-cell>
    <md-table-cell ></md-table-cell>
      </md-table-row>

    </md-table>

   </div>
<div class="md-layout-item md-small-size-100 md-size-25" v-for="(rel,id) in relatorios" :key="id" >
               <md-button   @click="Edit(rel.id)" class="md-raised md-info">Editar relatorio</md-button>
          </div>

          </md-card-content>
        </md-card>
      </div>
      </div>
    
    <!-----------------------------------------------------------Edit Report----------------------------------------------------------->
    

    <div v-if="EditReport">
      <form>
    <md-card>
      <md-card-header  data-background-color="blue">
        <h4 class="title" style="text-align:center">Escrever Relatorio</h4>
      </md-card-header>

      <md-card-content >
        <div class="md-layout" >
         
  
          <div class="md-layout-item md-small-size-100 md-size-40" >       
        <md-field v-for="(rel,id) in edits" :key="id" >
          <label >{{rel.Setor}} </label>
                    <md-input v-model="Setor" type="text"></md-input>              
        </md-field>
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-40">
           <md-field v-for="(rel,id) in edits" :key="id" >
             <label>{{rel.Tag_Maquina}}</label>
             <md-input v-model="Tag_Maquina" type="text"></md-input>
        </md-field>
          </div>
  
    
         <div class="md-layout-item md-small-size-100 md-size-40">
           <md-field v-for="(rel,id) in edits" :key="id">
             <label>{{rel.Registro}}</label>
             <md-input v-model="Registro" type="text"></md-input>    
        </md-field>
          </div>

<div class="md-layout-item md-small-size-100 md-size-30">
           <md-field v-for="(rel,id) in edits" :key="id">
             <label>{{rel.Data_inicio}}</label>
             <md-input v-model="Data_inicio" type="text"></md-input>    
        </md-field>
          </div>
    <div class="md-layout-item md-small-size-100 md-size-20">
           <md-field v-for="(rel,id) in edits" :key="id">
             <label>{{rel.Hora_inicio}}</label>
             <md-input v-model="Hora_inicio" type="text"></md-input>    
        </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-30">
           <md-field v-for="(rel,id) in edits" :key="id">
             <label>{{rel.Data_fim}}</label>
             <md-input v-model="Data_fim" type="text"></md-input>    
        </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-20">
           <md-field v-for="(rel,id) in edits" :key="id">
             <label>{{rel.Hora_fim}}</label>
             <md-input v-model="Hora_fim" type="text"></md-input>    
        </md-field>
          </div>
        
    <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   
 <div class="md-layout-item md-small-size-100 md-size-80">
           <md-field v-for="(rel,id) in edits" :key="id">
             <label>{{rel.Laudo}}</label>
             <md-textarea v-model="Laudo" type="text"></md-textarea>   
        </md-field>
          </div>
    
          <div class="md-layout-item md-small-size-100 md-size-80 ">
            <md-field v-for="(rel,id) in edits" :key="id">
              <label>{{rel.Problema}}</label>
                <md-textarea v-model="Problema" type="text"></md-textarea>
             
            </md-field>
          </div>
    <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
  
            <div class="md-layout-item md-small-size-100 md-size-80 ">
            <md-field v-for="(rel,id) in edits" :key="id">
              <label>{{rel.Resumo}}</label>
              <md-textarea v-model="Resumo" type="text"></md-textarea>
            
            </md-field>
          </div>
      <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   
    <div class="md-layout-item md-small-size-100 md-size-80 ">
            <md-field v-for="(rel,id) in edits" :key="id">
              <label>{{rel.Pecas}}</label>
               <md-textarea v-model="Pecas" type="text"></md-textarea>
           
            </md-field>
          </div>

      <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
 
           <div class="md-layout-item md-small-size-100 md-size-25" v-for="(rel,id) in edits" :key="id" >
               <md-button   @click="Editar(rel.id)" class="md-raised md-info">Criar Ordem</md-button>
          </div>
        </div>
       
      </md-card-content>
    </md-card>
 
  </form>

   </div>
  </div>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2'

export default {
  
  data () {
    return {
      messagem: "Não há ordem  em aberto ",
      Setor: null,
      Tag_Maquina: null,
      Registro: null,
      Data_inicio: null,
      Hora_inicio: null,
      Hora_fim: null,
      Data_fim: null,
      Laudo: null,
      Problema: null,
      Resumo: null,
      Pecas: null,
      Status: 1,
      Executar: 2,
      Ready: 0,
      ordemOpen: [],
      ordemProgress: [],
      ordems: [],
      writee: [],
      edits: [],
PageOrder: true,
PageToOpen: false,
PageOpen: false,
PageProgress: false,
 PageWrite:false,
PageFinalized:false,
      Report: true,
      View: false,
       EditReport: false,
     
      relatorio: [],
      relatorios: []
    }
  },
  methods:{

/*----------------------------------Methods bread crumbs from the order open page-------------------------------------------*/
  ToOpen: function(){
      this.PageOrder = !this.PageOrder;
      this.PageToOpen = !this.PageToOpen;
    },

/*--------------------------order opening page registration method----------------------------------------------*/
         cadastrar: function(){
    axios.post("http://localhost:8000/ordem/cadastrar",{Setor:this.Setor, Tag_Maquina:this.Tag_Maquina, Problemas:this.Problemas, Status:this.Status})
   .then(res => {
     console.log(res)
     this.ordem = res.data;
    
        if(this.ordem == true){
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Cadastro realizado com sucesso.',
  showConfirmButton: false,
  timer: 2000
   
})
 
  this.PageToOpen = !this.PageToOpen;
   this.PageOpen = !this.PageOpen;

   }if(this.ordem == false){
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Erro no cadastro, Favor realizar novamento.',
  showConfirmButton: false,
  timer: 2000
})
 

   }
     axios.get("http://localhost:8000/ordem/mostrar/1" )
 .then(res => { 
   console.log(res);
   this.ordemOpen = res.data; 
 })

   })
    },








/*------- ------------------------------Method bread crumbs from  open order page----------------------------------------------*/
  Open: function(){
       this.PageOrder = !this.PageOrder;
      this.PageOpen = !this.PageOpen;
   
   axios.get("http://localhost:8000/ordem/mostrar/1" )
 .then(res => { 
   console.log(res);
   this.ordemOpen = res.data; 
 })
  
 
    },
 
 /*---------------------------------------------Method for Executing Open Order Page Order-------------------------------------------*/
    executar: function(id){
axios.put("http://localhost:8000/ordem/Status/"+ id, { Status:this.Executar})
   .then(res => {
     console.log(res);

       this.PageOpen = !this.PageOpen;
       this.PageProgress = !this.PageProgress;

             axios.get("http://localhost:8000/ordem/mostrar/2" )
 .then(res => { 
   console.log(res);
   this.ordemProgress = res.data; 
 })
     })

    },










/*----------------------------------------Method bread crumbs from   Progress orders page----------------------------------------------*/
   Progress: function(){
       this.PageOrder = !this.PageOrder;
      this.PageProgress = !this.PageProgress;

       axios.get("http://localhost:8000/ordem/mostrar/2" )
 .then(res => { 
   console.log(res);
   this.ordemProgress = res.data; 
 })
  
    },

/*--------------------------------------------Method for writing order of progress page---------------------------------------------------*/
    write: function(id){
          this.PageProgress = !this.PageProgress;
          this.PageWrite = !this.PageWrite;
          
 axios.get("http://localhost:8000/ordem/utilizar/" + id )
 .then(res => { 
   console.log(res);
   this.writee = res.data; 
    
 })
    },








/*----------------------------------------------------- Method bread crumbs from  Write report page------------------------------------------*/
   ToWrite: function(){
  this.PageWrite = !this.PageWrite;
    this.PageOrder = !this.PageOrder;
    },

/*-----------------------------------------------------Method to record page  to the write report page--------------------------------------------*/
  register: function(id){
    axios.post("http://localhost:8000/relatorio/cadastrar",{Setor:this.Setor,  Tag_Maquina:this.Tag_Maquina, Registro:this.Registro,
    Data_inicio:this.Data_inicio, Hora_inicio:this.Hora_inicio, Hora_fim:this.Hora_fim, Data_fim:this.Data_fim, Laudo:this.Laudo, Problema:this.Problema, Resumo:this.Resumo, Pecas:this.Pecas,
    Status:this.Status})
   .then(res => {
     console.log(res);
    
axios.put("http://localhost:8000/ordem/Status/"+ id, { Status:this. Ready})
   .then(res => {
     console.log(res);

     })
 this.PageWrite = !this.PageWrite;
     this.PageFinalized = !this.PageFinalized;
     
  axios.get("http://localhost:8000/ordem/mostrar/0" )
 .then(res => { 
   console.log(res);
   this.ordemProgress = res.data; 
 })
   })
    },
















/*----------------------------------------Method bread crumbs from   Finalized orders page----------------------------------------------*/
  Finalized: function(){
       this.PageOrder = !this.PageOrder;
      this.PageFinalized = !this.PageFinalized;
  
 axios.get("http://localhost:8000/ordem/mostrar/0" )
 .then(res => { 
   console.log(res)
   this.ordems = res.data; 
   
 })
    },

/*---------------------------------------Method view  report on the Finalized orders page---------------------------------------------------*/
   PageView: function(id){
  this.PageFinalized = !this.PageFinalized;
   this.View = !this.View;

  axios.get("http://localhost:8000/relatorio/" + id )
 .then(res => { 
   console.log(res);
   this.relatorios = res.data; 
 })  
},
  Delete: function(id){
 Swal.fire({
  title: 'Deseja deletar?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Deletar!'
}).then((result) => {
  if (result.isConfirmed) {
   axios.delete("http://localhost:8000/ordem/deletar/" + id)
.then(res => {
  console.log(res);
  axios.delete("http://localhost:8000/relatorio/deletar/" + id)
.then(res => {
  console.log(res);
})
  this.delete = res.data;
 axios.get("http://localhost:8000/ordem/mostrar/0" )
 .then(res => { 
   console.log(res)
   this.ordems = res.data; 
   
 })
})

    Swal.fire(
      'Deletado!',
      'Ordem e Relatorio deletado com sucesso.',
      'success'
    )
  }
}) 
 },






/*------------------------------------------------ Methods bread crumbs from  View report page---------------------------------------------------------*/
    ToOpenview: function(){
      this.View = !this.View;
      this.PageOrder = !this.PageOrder;
    },

/*--------------------------------------------Methods to edit report on the View report page-------------------------------------------------------------*/
   Edit: function(id){
          this.EditReport = !this.EditReport;
          this.View = !this.View;
          
 axios.get("http://localhost:8000/relatorio/" + id )
 .then(res => { 
   console.log(res);
   this.edits = res.data; 
    
 })
    },
 Editar: function(id){
    axios.put("http://localhost:8000/relatorio/" + id + "/atualizar",{Setor:this.Setor,  Tag_Maquina:this.Tag_Maquina, Registro:this.Registro,
    Data_inicio:this.Data_inicio, Hora_inicio:this.Hora_inicio, Hora_fim:this.Hora_fim, Data_fim:this.Data_fim, Laudo:this.Laudo, Problema:this.Problema, Resumo:this.Resumo, Pecas:this.Pecas, Status:null
   
   
   
   })
   .then(res => {
     console.log(res);
    this.atualizar = res.data;

  if(this.atualizar == true){
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Relatorio Atualizado  com sucesso.',
  showConfirmButton: false,
  timer: 3000
   
})
this.EditReport = !this.EditReport;
          this.View = !this.View;

   }if(this.atualizar == false){
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Erro na atualização, Favor realizar novamente.',
  showConfirmButton: false,
 timer: 3000
})
 

   }
         
     
  axios.get("http://localhost:8000/relatorio/" + id )
 .then(res => { 
   console.log(res);
   this.relatorios = res.data; 
 })  
   })
    },











/*----------------------------Method bread crumbs to Finalized page-----------------------------------------*/
    FinalizedView: function(){
       this.View = !this.View;
      this.PageFinalized = !this.PageFinalized;
  
 axios.get("http://localhost:8000/ordem/mostrar/0" )
 .then(res => { 
   console.log(res)
   this.ordems = res.data; 
   
 })

    },
  

 





/*----------------------------Method bread crumbs to Progress page-----------------------------------------*/

    ProgressWrite: function(){
this.PageWrite = !this.PageWrite;
 this.PageProgress = !this.PageProgress;

       axios.get("http://localhost:8000/ordem/mostrar/2" )
 .then(res => { 
   console.log(res);
   this.ordemProgress = res.data; 
 })
    },
  

     
  },

}
</script>
























<style scoped>
:root {
  background-color: #def;
  box-shadow: inset 0 0 7rem #fff, inset 0 0 3rem #fff;
  font: normal x-large/1 "Roboto Condensed", sans-serif;
  min-height: 100vh;
}

header {
  background-color: #000;
  color: #fff;
  font-size: .75rem;
  letter-spacing: .05em;
  text-transform: uppercase;
  margin: 0;
}
nav {
  display: table;
  overflow: hidden;
  width: 100%;
}

ul {
  display: table-row;
  list-style: none;
  text-align: center;
}
li {
  display: table-cell;
  vertical-align: middle;
  width: 20.33%;
}


a,
b {
  display: block;
  padding: 15px 0;
  position: relative;
  white-space: nowrap;
  
}

a::after {
  background-color: #000;
  border-radius: 0 0 0 48px;
  box-shadow: 3px -3px 0 3px #def;
  content: "";
  height: 48px;
  position: absolute;
  right: -24px;
  top: 0;
  transform: scale(.707) rotate(45deg);
  width: 48px;
  z-index: 1;
    color: #fff;
}

a,
a:link,
a:visited,
a:hover,
a:active,
a:focus {
  color: #fff;
  text-decoration: none;
}

a:hover,
a:hover::after {
  background-color: #3c3c3c;
  
}

b {
  background-color: #777;
  font: inherit;
}

</style>
