<template>
  <div class="content">
    <!----------------------------------------bread crumb---------------------------------------------------------->
         <header>
           <nav>
    <ul>  
      <la>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </la>


   <!-----------------------------------bread crumbs from  order  page-------------------------------------------------->
      <la v-if="PageOrder">
        <b >ORDENS</b>
      </la>


      <!-----------------------------------bread crumbs from the order open page-------------------------------------------------->
        <la v-if="PageToOpen">
        <a @click="ToOpen()" >Ordens</a>
      </la>
      <la v-if="PageToOpen">
        <b >Abrir Ordem</b>
      </la>

      <!-----------------------------------bread crumbs from  open order page-------------------------------------------------->
       <la  v-if="PageOpen">
        <a @click="Open()">Ordens</a>
      </la>
      <la  v-if="PageOpen">
        <b >Ordens Abertas</b>
      </la>

   <!-----------------------------------bread crumbs from  Progress orders page-------------------------------------------------->
  <la v-if="PageProgress">
        <a @click="Progress()">Ordens</a>
      </la>
      <la v-if="PageProgress">
        <b >Ordens em andamento</b>
      </la>

  <!-----------------------------------bread crumbs from  Write report page-------------------------------------------------->  
        <la  v-if="PageWrite">
        <a @click="ToWrite()">Ordens</a>
      </la>
        <la  v-if="PageWrite">
        <a @click="ProgressWrite()">Ordens em andamento</a>
      </la>
    
      <la  v-if="PageWrite">
        <b >Escrever Relatorio</b>
      </la>

 <!-----------------------------------bread crumbs from  finalized orders page-------------------------------------------------->
          <la v-if="PageFinalized">
        <a  @click="Finalized()">Ordens</a>
      </la>
      <la v-if="PageFinalized" >
        <b >Ordens Finalizadas</b>
      </la>
      

  <!-----------------------------------bread crumbs from  View report page-------------------------------------------------->     
       <la v-if="View">
        <a @click="ToOpenview()" >Ordens</a>
      </la>
 <la v-if="View" >
        <a  @click="FinalizedView()">Ordens Finalizadas</a>
      </la>
 <la  v-if="View">
        <b >Visualizar Relatorio</b>
      </la>  

<!-----------------------------------bread crumbs from  Edit report page--------------------------------------------------> 
        <la v-if="EditReport">
        <a @click="ToOpen()" >Ordens</a>
      </la>
      <la v-if="EditReport" >
        <a  @click="FinalizedView()">Ordens Finalizadas</a>
      </la>  
        <la  v-if="EditReport">
        <a @click="Edit()">Visualizar Relatorio</a>
      </la>  
         <la  v-if="EditReport">
        <b  >Editar Relatorio</b>
      </la>  
    </ul>
  </nav>
    </header>

 <!--------------------------Order Page----------------------------------->
     <div v-if="PageOrder">   
    <div class="md-layout">
      <div class="md-layout-item">
   
      <md-card v-for="(user,id) in usuario" :key="id">
        <md-card-header data-background-color="green">
          <h4 class="title" style="text-align:center">Ordens</h4>
        </md-card-header>
        <md-card-content>
          <div class="md-layout">
            <div class="md-layout-item md-size-100"   v-if="user.Tipo == 'Analista' || user.Tipo == 'Gestor'" >
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
             <label>Digite o solicitante</label>
             <md-input v-model="Solicitante" type="text"></md-input>
         
        </md-field>
          </div>
           
  <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
          <div class="md-layout-item md-small-size-100 md-size-50">       
        <md-field>
            <md-select v-model="Setor" name="Setor"    id="Setor" placeholder="Selecione o Setor">
            <md-option value="Ferramentaria">Ferramentaria</md-option>
            <md-option value="Usinagem ">Usinagem </md-option>
            <md-option value="Fundição">Fundição</md-option>
           
          </md-select>
                   
                
        </md-field>
          </div>

           <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
          <div class="md-layout-item md-small-size-100 md-size-50">
           <md-field >
                <md-select v-model="Tag_Maquina" name="Tag_Maquina"   id="Tag_Maquina" placeholder="Selecione a maquina">
                  <div v-for="(maquina,id) in maquinas" :key="id"  >           
          <md-option v-bind:value="maquina.Tag_Maquina">
    {{ maquina.Tag_Maquina}}
  </md-option>
             
  </div>
           
          </md-select>
        </md-field>
          </div>
           
                <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   <div class="md-layout-item md-small-size-100 md-size-25">
  </div>

          <div class="md-layout-item md-small-size-100 md-size-50 " >
            <md-field>
              <label>Digite o Problema</label>
              <md-input v-model="Problemas" type="text"></md-input>
            </md-field>
          </div>
                        <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   <div class="md-layout-item md-small-size-100 md-size-25">
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
        <md-card v-for="(user,id) in usuario" :key="id">
          <md-card-header data-background-color="red">
            <h4 class="title" style="text-align:center">Ordens abertas</h4>
          </md-card-header>
          <md-card-content>
           <md-table  >
                <md-table-row slot="md-table-row">
        <md-table-head >Nº </md-table-head>
        <md-table-head>Setor</md-table-head>
        <md-table-head>Tag /Maquina</md-table-head>
        <md-table-head>Problema</md-table-head>
      </md-table-row >
            <md-table-row slot="md-table-row" v-for="(ordem,id) in ordemOpen" :key="id" > 
        <md-table-cell md-label="id">{{ ordem.id }}</md-table-cell>
        <md-table-cell md-label="Setor">{{ ordem.Setor }}</md-table-cell>
        <md-table-cell md-label="Tag_Maquina">{{ordem.Tag_Maquina }}</md-table-cell>
        <md-table-cell md-label="Problemas">{{ordem.Problemas }}</md-table-cell>
   <md-table-cell  v-if="user.Tipo == 'Analista' || user.Tipo == 'Tecnico'">     <sidebar-link to="">
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
        <md-card v-for="(user,id) in usuario" :key="id">
          <md-card-header data-background-color="orange">
            <h4 class="title" style="text-align:center">Ordens em andamento</h4>
          </md-card-header>
          <md-card-content>     <md-table  >
            <md-table-row slot="md-table-row">
        <md-table-head >Nº </md-table-head>
        <md-table-head>Setor</md-table-head>
        <md-table-head>Tag /Maquina</md-table-head>
        <md-table-head>Problema</md-table-head>
      </md-table-row >
 
            <md-table-row slot="md-table-row"  v-for="(ordem,id) in ordemProgress" :key="id"  > 
          
        <md-table-cell md-label="id" >{{ ordem.id }}</md-table-cell>
        <md-table-cell md-label="Setor">{{ ordem.Setor }}</md-table-cell>
        <md-table-cell md-label="Tag">{{ordem.Tag_Maquina }}</md-table-cell>
         <md-table-cell md-label="Problemas">{{ordem.Problemas }}</md-table-cell>
   <md-table-cell   v-if="user.Tipo == 'Analista' || user.Tipo == 'Tecnico'"  >    
       <md-button type="button" @click="write(ordem.id)" class="md-warning">Escrever Relatorio</md-button>
        </md-table-cell>
               
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
    
             
          <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">  
      <md-card-content v-for="(user,id) in usuario" :key="id">
        <div class="md-layout" v-for="(item,id) in writee" :key="id">
           <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
         <div class="md-layout-item md-small-size-100 md-size-50" >  
        <h5  style="text-align:center"> Solicitante:</h5>
       
        <md-field>  
   
              <label>{{item.Solicitante}}</label>
                    <md-input v-model="Solicitante" type="text"><label>{{item.Solicitante}}</label></md-input>              
        </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-50" >  
              <h5  style="text-align:center"> Setor:</h5>
        <md-field>
          <label>{{item.Setor}} </label>
                    <md-input v-model="Setor" type="text"><label>{{item.Setor}}</label></md-input>              
        </md-field>
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-50">
                  <h5  style="text-align:center"> Tag /Maquina:</h5>
           <md-field>
             <label>{{item.Tag_Maquina}}</label>
             <md-input v-model="Tag_Maquina" type="text"><label>{{item.Tag_Maquina}}</label></md-input>
        </md-field>
          </div>
  

<div class="md-layout-item md-small-size-100 md-size-100 ">
  <h5  style="text-align:center"> Problemas :</h5>
            <md-field>
                  <md-icon>description</md-icon>
              <label>{{item.Problemas}}</label>
                <md-input v-model="Problema" type="text">{{item.Problemas}}</md-input>
          
            </md-field>
          </div>






       <div class="md-layout-item md-small-size-100 md-size-50">
       
           <md-field>
             <label>{{user.usuario}}</label>
             <md-input v-model="Tecnico" type="text">{{user.usuario}}</md-input>    
        </md-field>
          </div>
    
   
         <div class="md-layout-item md-small-size-100 md-size-50">
           <md-field>
             <label>Digite o Registro do Tecnico:</label>
             <md-input v-model="Registro" type="text"></md-input>    
        </md-field>
          </div>
 <div class="md-layout-item md-small-size-100 md-size-25">
    
          </div>








<div class="md-layout-item md-small-size-100 md-size-25">
   <label>Digite o Data de inicio:</label>
           <md-field>
             <md-icon>event</md-icon>
             <md-input v-model="Data_inicio" type="date"></md-input>    
        </md-field>
          </div>
    <div class="md-layout-item md-small-size-100 md-size-25">
      <label>Digite o Hora de inicio:</label>
           <md-field>
             <md-icon><i class="far fa-clock"></i></md-icon>
             <md-input v-model="Hora_inicio" type="time"></md-input>    
        </md-field>
          </div>


       <div class="md-layout-item md-small-size-100 md-size-25">
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25">
          </div>

          <div class="md-layout-item md-small-size-100 md-size-25">
               <label>Digite o Data do final:</label>
           <md-field> 
             <md-icon>event</md-icon>          
             <md-input v-model="Data_fim" type="date"></md-input>    
        </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25">
             
              <label>Digite o Hora final:</label>
           <md-field>
             <md-icon><i class="far fa-clock"></i></md-icon>
             <md-input v-model="Hora_fim" type="time"></md-input>    
        </md-field>
          </div>
        
    <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   
 <div class="md-layout-item md-small-size-100 md-size-100">
           <md-field>
             <label>Digite o Laudo</label>
             <md-textarea v-model="Laudo" type="text"></md-textarea>   
              <md-icon>description</md-icon>
        </md-field>
          </div>
    
          
    <div class="md-layout-item md-small-size-100 md-size-25">
   
  </div>
  
            <div class="md-layout-item md-small-size-100 md-size-100 ">
            <md-field>
              <label>Digite o Resumo</label>
              <md-textarea v-model="Resumo" type="text"></md-textarea>
             <md-icon>description</md-icon>
            </md-field>
          </div>
      <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
   
    <div class="md-layout-item md-small-size-100 md-size-100 ">
            <md-field>
              <label>Digite as Peças Utilizadas</label>
               <md-textarea v-model="Pecas" type="text" required></md-textarea>
            <md-icon>description</md-icon>
            </md-field>
          </div>

      <div class="md-layout-item md-small-size-100 md-size-25">
  </div>
 
           <div class="md-layout-item md-small-size-100 md-size-25" v-for="(item,id) in writee" :key="id">
               <md-button   @click="register(item.id)" class="md-raised md-info">Criar Ordem</md-button>
          </div>
        </div>
      </md-card-content>
          </div>
    </md-card>
 
  </form>
 </div>






<!---------------------------------------Finalized Orders Page------------------------------->    
  <div  v-if="PageFinalized">
    <div class="md-layout">
  <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card v-for="(user,id) in usuario" :key="id" >
          <md-card-header data-background-color="blue">
            <h4 class="title" style="text-align:center">Ordens Finalizadas</h4>
          </md-card-header>
            <md-card-content>
           <md-table >
            <md-table-row slot="md-table-row"  v-for="(ordem,id) in ordems" :key="id"  > 
        <md-table-cell md-label="id">{{ ordem.id }}</md-table-cell>
        <md-table-cell md-label="Setor">{{ ordem.Setor }}</md-table-cell>
        <md-table-cell md-label="Tag_Maquina">{{ordem.Tag_Maquina }}</md-table-cell>
        <md-table-cell md-label="Problemas">{{ordem.Problemas }}</md-table-cell>
   <md-table-cell >     
       <md-button type="button"  @click="PageView(ordem.id)" class="md-success">Visualiar relatorio</md-button>
        </md-table-cell>
        <md-table-cell v-if="user.Tipo == 'Analista' "><md-button class="md-danger" @click="Delete(ordem.id)">Excluir</md-button></md-table-cell>  
  </md-table-row></md-table>
             
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>












 <!-----------------------------------------------------------View Report----------------------------------------------------------->
    

    <div v-if="View">
        <md-card >
        <md-card-header data-background-color="blue">
            <h3 class="title" style="text-align:center">Relatorio</h3>
          </md-card-header>
          

 <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
          <md-card-content > 
        <div class="md-layout" v-for="(rel,id) in relatorios" :key="id">
           <div class="md-layout-item md-small-size-100 md-size-35" >       
        
          </div>
   <div   class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-30" >
  
    <h4  style="text-align:center"> Solicitante:</h4>
        <md-field >   
    <h5  style="text-align:center">{{rel.Solicitante}}</h5>
     </md-field>
             
   </div>
    <div class="md-layout-item md-small-size-100 md-size-35" >       
        
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-25" >  
              <h4  style="text-align:center"> Setor:</h4>
        <md-field >
          <h5 style="text-align:center;" >{{rel.Setor}} </h5>
      </md-field>
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-25">
                  <h4  style="text-align:center"> Tag /Maquina:</h4>
           <md-field >
             <h5 style="text-align:center;">{{rel.Tag_Maquina}}</h5>
        </md-field>
          </div>
   <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>

<div class="md-layout-item md-small-size-100 md-size-100 ">
  <h4  style="text-align:center"> Problemas :</h4>
            
              <h5 style="text-align:center;">{{rel.Problemas}}</h5>      
          </div>

             <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-25" >  
              <h4  style="text-align:center"> Tecnico responsavel:</h4>
      
        <h5 style="text-align:center;">{{rel.Tecnico}} </h5>
     
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-25">
                  <h4  style="text-align:center">Registro :</h4>
          
            <h5 style="text-align:center ">{{rel.Registro}}</h5>
        
          </div>
   <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>

           <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-25" >  
              <h4  style="text-align:center">Data de inicio:</h4>
        
              
         <h5 style="text-align:center ">{{rel.Data_inicio}} </h5>
     
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-25">
                  <h4  style="text-align:center">Hora de inicio:</h4>
           
             
            <h5 style="text-align:center ">{{rel.Hora_inicio}}</h5>
      
          </div>
   <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-25" >  
              <h4  style="text-align:center"> Data do termino:</h4>
       
             
        <h5 style="text-align:center ">{{rel.Data_fim}} </h5>
      
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-25">
                  <h4  style="text-align:center">Hora do termino :</h4>
             <h5 style="text-align:center; ">{{rel.Hora_fim}}</h5>
         
          </div>
   <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-100 ">
  <h4  style="text-align:center"> Laudo:</h4>
            <md-field>
                
              <h5>{{rel.Laudo}}</h5>
           
            </md-field>
          </div>
             <div class="md-layout-item md-small-size-100 md-size-100 ">
  <h4  style="text-align:center"> Resumo:</h4>
            <md-field>
                  
              <h5>{{rel.Resumo}}</h5>
            
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-100 ">
  <h4  style="text-align:center"> Peças utilizadas:</h4>
   
            <md-field>
            
              <h5>{{rel.Pecas}}</h5>
            
          
            </md-field>
          </div>
<div class="md-layout-item md-small-size-100 md-size-25" v-for="(user,id) in usuario" :key="id" >
               <md-button   @click="Edit(rel.id)" class="md-raised md-info">Editar relatorio</md-button>
          </div>
        </div>
          </md-card-content>
          </div>
        </md-card>
      </div>
      
    
    <!-----------------------------------------------------------Edit Report----------------------------------------------------------->
    

    <div v-if="EditReport">
      <form>
    <md-card>
      <md-card-header  data-background-color="blue">
        <h4 class="title" style="text-align:center">Editar Relatorio</h4>
      </md-card-header>

 <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
          <md-card-content > 
        <div class="md-layout" v-for="(rel,id) in edits" :key="id">
           <div class="md-layout-item md-small-size-100 md-size-35" >       
        
          </div>
   <div   class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-30" >
  
    <h4  style="text-align:center"> Solicitante:</h4>
        <md-field >   
    <label >{{rel.Solicitante}}</label>
    <md-input v-model="Solicitante" type="text"></md-input>   
     </md-field>
             
   </div>
    <div class="md-layout-item md-small-size-100 md-size-35" >       
        
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-25" >  
              <h4  style="text-align:center"> Setor:</h4>
        <md-field >
          <label >{{rel.Setor}} </label>
           <md-input v-model="Setor" type="text"></md-input>   
      </md-field>
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-25">
                  <h4  style="text-align:center"> Tag /Maquina:</h4>
           <md-field >
             <label>{{rel.Tag_Maquina}}</label>
                 <md-input v-model="Tag_Maquina" type="text"></md-input>  
        </md-field>
          </div>
   <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>

<div class="md-layout-item md-small-size-100 md-size-100 ">
  <h4  style="text-align:center"> Problemas :</h4>

   <md-field>
             <label>{{rel.Problemas}}</label>
             <md-textarea v-model="Problemas" type="text"></md-textarea>   
              <md-icon>description</md-icon>
        </md-field>
                     
          </div>

             <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-25" >  
              <h4  style="text-align:center"> Tecnico responsavel:</h4>
       <md-field >
             <label>{{rel.Tecnico}}</label>
                 <md-input v-model="Tecnico" type="text"></md-input>  
        </md-field>
      
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-25">
                  <h4  style="text-align:center">Registro :</h4>
             <md-field >
             <label>{{rel.Registro}}</label>
                 <md-input v-model="Registro" type="text"></md-input>  
        </md-field>
         
          </div>
   <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>

           <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-25" >  
              <h4  style="text-align:center">Data de inicio:</h4>
        
               <md-field >
             <label>{{rel.Data_inicio}}</label>
                 <md-input v-model="Data_inicio" type="text"></md-input>  
        </md-field>
        
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-25">
                  <h4  style="text-align:center">Hora de inicio:</h4>
           
                <md-field >
             <label>{{rel.Hora_inicio}}</label>
                 <md-input v-model="Hora_inicio" type="text"></md-input>  
        </md-field>
            
          </div>
   <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-25" >  
              <h4  style="text-align:center"> Data do termino:</h4>
       
                <md-field >
             <label>{{rel.Data_fim}}</label>
                 <md-input v-model="Data_fim" type="text"></md-input>  
        </md-field>
        
      
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-25">
                  <h4  style="text-align:center">Hora do termino :</h4>
                        <md-field >
             <label>{{rel.Hora_fim}}</label>
                 <md-input v-model="Hora_fim" type="text"></md-input>  
        </md-field>
        
      
          </div>
   <div class="md-layout-item md-small-size-100 md-size-25" >       
        
          </div>
          <div class="md-layout-item md-small-size-100 md-size-100 ">
  <h4  style="text-align:center"> Laudo:</h4>
    <md-field>
             <label>{{rel.Laudo}}</label>
             <md-textarea v-model="Laudo" type="text"></md-textarea>   
              <md-icon>description</md-icon>
        </md-field>
           
          </div>
             <div class="md-layout-item md-small-size-100 md-size-100 ">
  <h4  style="text-align:center"> Resumo:</h4>
  <md-field>
             <label>{{rel.Resumo}}</label>
             <md-textarea v-model="Resumo" type="text"></md-textarea>   
              <md-icon>description</md-icon>
        </md-field>
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-100 ">
  <h4  style="text-align:center"> Peças utilizadas:</h4>
   <md-field>
             <label>{{rel.Pecas}}</label>
             <md-textarea v-model="Pecas" type="text"></md-textarea>   
              <md-icon>description</md-icon>
        </md-field>
           
          </div>
  <div class="md-layout-item md-small-size-100 md-size-25" v-for="(user,id) in usuario" :key="id" >
               <md-button  v-if="user.Tipo == 'Analista' || user.Tipo == 'Tecnico'"  @click="Editar(rel.id)" class="md-raised md-info">Criar Ordem</md-button>
          </div>
        </div>
          </md-card-content>
          </div>
 
        
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
      Solicitante: null,
      Codigo: '1',
      Setor: null,
      Tag_Maquina: null,
      Registro:'0',
      Tecnico: '0',
      Data_inicio: '16/06/2021',
      Hora_inicio: '50:00',
      Hora_fim: '0',
      Data_fim: '0',
      Laudo: '0',
      Problemas:null,
      Resumo: '0',
      Pecas: '0',
      Status: 1,





      Executar: 2,
      Ready: 0,
      ordemOpen: [],
      ordemProgress: [],
      ordems: [],
      writee: [],
      edits: [],
      usuario: [],
      maquinas:[],
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
  },   created: function(){

  axios.get("http://localhost:8000/usuario/session/" + this.loggedUser.usuario )
 .then(res => { 
   console.log(res);
   this.usuario = res.data;
  
 })

    } , 
  computed: {
      loggedUser() {
        const token = window.localStorage.getItem('token')
        const payload = JSON.parse(atob(token.split('.')[1]))
        return payload
      }},
  methods:{
      isLogged() {
        window.localStorage.getItem('token')
          ? this.logged = true
          : this.logged = false
      },
     
   
   
   
/*----------------------------------Methods bread crumbs from the order open page-------------------------------------------*/
  ToOpen: function(){
      this.PageOrder = !this.PageOrder;
      this.PageToOpen = !this.PageToOpen;

        axios.get("http://localhost:8000/maquina" )
 .then(res => { 
   console.log(res);
   this.maquinas = res.data; 
 })

    },

/*--------------------------order opening page registration method----------------------------------------------*/
         cadastrar: function(){
    axios.post("http://localhost:8000/relatorio/cadastrar",{Solicitante:this.Solicitante, Setor:this.Setor, Tag_Maquina:this.Tag_Maquina, Problemas:this.Problemas,
      Tecnico:this.Tecnico, Registro:this.Registro, Data_inicio:this.Data_inicio, Data_fim:this.Data_fim,  Hora_inicio:this.Hora_inicio, Hora_fim:this.Hora_fim,
        Laudo:this.Laudo, Resumo:this.Resumo, Pecas:this.Pecas,  Codigo:this.Codigo,  Status:this.Status})
   .then(res => {
     console.log(res);
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
     axios.get("http://localhost:8000/relatorio/mostrar/1" )
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
   
   axios.get("http://localhost:8000/relatorio/mostrar/1" )
 .then(res => { 
   console.log(res);
   this.ordemOpen = res.data; 
 })
  
 
    },
 
 /*---------------------------------------------Method for Executing Open Order Page Order-------------------------------------------*/
    executar: function(id){
axios.put("http://localhost:8000/relatorio/Status/"+ id, { Status:this.Executar})
   .then(res => {
     console.log(res);

       this.PageOpen = !this.PageOpen;
       this.PageProgress = !this.PageProgress;

             axios.get("http://localhost:8000/relatorio/mostrar/2" )
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

       axios.get("http://localhost:8000/relatorio/mostrar/2" )
 .then(res => { 
   console.log(res);
   this.ordemProgress = res.data; 
 })
  
    },

/*--------------------------------------------Method for writing order of progress page---------------------------------------------------*/
    write: function(id){
          this.PageProgress = !this.PageProgress;
          this.PageWrite = !this.PageWrite;
          
 axios.get("http://localhost:8000/relatorio/utilizar/" + id )
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
    axios.put("http://localhost:8000/relatorio/" + id +"/atualizar",{Solicitante: null, Setor: null, Tag_Maquina:null, Problemas:null,
      Tecnico:this.Tecnico, Registro:this.Registro, Data_inicio:this.Data_inicio, Data_fim:this.Data_fim,  Hora_inicio:this.Hora_inicio, Hora_fim:this.Hora_fim,
        Laudo:this.Laudo, Resumo:this.Resumo, Pecas:this.Pecas,  Codigo:this.Codigo,  Status:this.Status})
   .then(res => {
     console.log(res.data);
   this.confirmation = res.data;

        if(this.confirmation == true){
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Relatorio realizado com sucesso.',
  showConfirmButton: false,
  timer: 2000
   
})
 
axios.put("http://localhost:8000/relatorio/Status/"+ id, { Status:this.Ready})
   .then(res => {
     console.log(res);

     })
 
 this.PageWrite = !this.PageWrite;
this.PageFinalized = !this.PageFinalized;
     
      axios.get("http://localhost:8000/relatorio/mostrar/0" )
 .then(res => { 
   console.log(res);
   this.ordemProgress = res.data; 
 })

   }if(this.confirmation == false){
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Erro no cadastro, Favor realizar novamento.',
  showConfirmButton: false,
  timer: 2000
})
 

   }

   })
    },
















/*----------------------------------------Method bread crumbs from   Finalized orders page----------------------------------------------*/
  Finalized: function(){
       this.PageOrder = !this.PageOrder;
      this.PageFinalized = !this.PageFinalized;
  
 axios.get("http://localhost:8000/relatorio/mostrar/0" )
 .then(res => { 
   console.log(res)
   this.ordems = res.data; 
   
 })
    },

/*---------------------------------------Method view  report on the Finalized orders page---------------------------------------------------*/
   PageView: function(id){
  this.PageFinalized = !this.PageFinalized;
   this.View = !this.View;

   axios.get("http://localhost:8000/relatorio/utilizar/" + id )
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
   
  axios.delete("http://localhost:8000/relatorio/deletar/" + id)
.then(res => {
  console.log(res);
})
  this.delete = res.data;
 axios.get("http://localhost:8000/relatorio/mostrar/0" )
 .then(res => { 
   console.log(res)
   this.ordems = res.data; 
   
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
          
 axios.get("http://localhost:8000/relatorio/utilizar/" + id )
 .then(res => { 
   console.log(res);
   this.edits = res.data; 
    
 })
    },
 Editar: function(id){
    axios.put("http://localhost:8000/relatorio/" + id + "/atualizar",{Solicitante:this.Solicitante, Setor:this.Setor, Tag_Maquina:this.Tag_Maquina, Problemas:this.Problemas,
      Tecnico:this.Tecnico, Registro:this.Registro, Data_inicio:this.Data_inicio, Data_fim:this.Data_fim,  Hora_inicio:this.Hora_inicio, Hora_fim:this.Hora_fim,
        Laudo:this.Laudo, Resumo:this.Resumo, Pecas:this.Pecas,  Codigo:this.Codigo,  Status:this.Status
   
   
   
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
la {
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

.h5{
text-align:center; 
text-decoration: underline;
}

.h4{
font-weight: bolder;
 text-align:center; 
text-decoration: underline;
}
</style>
