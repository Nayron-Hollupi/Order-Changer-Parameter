<template>
  <div class="content">
         <header>
           <nav>
    <ul>
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>
      <li v-if="PageOrder">
        <b >Usuarios</b>
      </li>
        <li v-if="PageToOpen">
        <a @click="ToOpen()" >Ordens</a>
      </li>
      <li v-if="PageToOpen">
        <b >Abrir Ordem</b>
      </li>
       <li  v-if="PageOpen">
        <a @click="Open()">Ordens</a>
      </li>
      <li  v-if="PageOpen">
        <b >Ordens Abertas</b>
      </li>
        <li v-if="PageProgress">
        <a @click="Progress()">Ordens</a>
      </li>
      <li v-if="PageProgress">
        <b >Ordens em andamento</b>
      </li>
         <li v-if="PageFinalized">
        <a  @click="Finalized()">Ordens</a>
      </li>
      <li v-if="PageFinalized">
        <b >Ordens Finalizadas</b>
      </li>
           
  <li  v-if="PageWrite">
        <a @click="ToWrite()">Ordens</a>
      </li>
        <li  v-if="PageWrite">
        <a @click="ProgressWrite()">Ordens em andamento</a>
      </li>
    
      <li  v-if="PageWrite">
        <b >Escrever Relatorio</b>
      </li>
     
    </ul>
  </nav>
    </header>

 <!--------------------------Order Page     ----------------------------------->
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
                <md-button class="md-success" @click="ToOpen()" >Abrir Ordem</md-button> 
              </div>
              <div class="md-layout-item md-size-100">
               <md-button class="md-danger" @click="Open()" >Ordens Abertas</md-button>
              </div>
             <div class="md-layout-item md-size-100">
                 
                <md-button class="md-warning" @click="Progress()">Ordens em andamento</md-button>
             </div>
                <div class="md-layout-item md-size-100">
             <md-button class="md-info" @click="Finalized()">Ordens Finalizadas</md-button>
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
             <label>Digite o Tag</label>
             <md-input v-model="Tag" type="text"></md-input>
         
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
        <md-table-cell md-label="Tag">{{ordem.Tag }}</md-table-cell>
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
        <md-table-cell md-label="Tag">{{ordem.Tag }}</md-table-cell>
   <md-table-cell >     <sidebar-link to="">
       <md-button type="button" @click="write()" class="md-warning">Escrever Relatorio</md-button>
        </sidebar-link></md-table-cell>
               
  </md-table-row>
  </md-table>
             
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>
<!----------------------------Write Report------------------------------------------->
 <div v-if="PageWrite">
 <form>
    <md-card>
      <md-card-header  data-background-color="blue">
        <h4 class="title" style="text-align:center">Escrever Relatorio</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
    
          <div class="md-layout-item md-small-size-100 md-size-40">       
        <md-field>
          <label>Digite o Setor</label>
                    <md-input v-model="Setor" type="text"></md-input>              
        </md-field>
          </div>
  
          <div class="md-layout-item md-small-size-100 md-size-40">
           <md-field>
             <label>Digite o Maquina</label>
             <md-input v-model="Maquina" type="text"></md-input>
        </md-field>
          </div>
  
    <div class="md-layout-item md-small-size-100 md-size-20">
           <md-field>
             <label>Digite o Tag</label>
             <md-input v-model="Tag" type="text"></md-input>    
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
  
          <div class="md-layout-item md-small-size-100 md-size-30">
           <md-field>
             <label>Digite o Data do final</label>
             <md-input v-model="Data_fim" type="text"></md-input>    
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
 
           <div class="md-layout-item md-small-size-100 md-size-25">
               <md-button   @click="register()" class="md-raised md-info">Criar Ordem</md-button>
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
   <md-table-cell >     <sidebar-link to="/relatorios/visualizar">
       <md-button type="button" class="md-success">Visualiar relatorio</md-button>
        </sidebar-link></md-table-cell>  
  </md-table-row></md-table>
             
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>


  </div>
</template>

<script>
import axios from 'axios';
export default {
  
  data () {
    return {
      messagem: "Não há ordem  em aberto ",
      Status: 1,
      Executar: 2,
      ordemOpen: [],
      ordemProgress: [],
      ordems: [],
PageOrder: true,
PageToOpen: false,
PageOpen: false,
PageProgress: false,
 PageWrite:false,
PageFinalized:false
    }
  },
  methods:{
    ToOpen: function(){
      this.PageOrder = !this.PageOrder;
      this.PageToOpen = !this.PageToOpen;
    },
    Open: function(){
       this.PageOrder = !this.PageOrder;
      this.PageOpen = !this.PageOpen;
   
   axios.get("http://localhost:8000/ordem/mostrar/1" )
 .then(res => { 
   console.log(res);
   this.ordemOpen = res.data; 
 })
  
 
    },
    executar: function(id){
axios.put("http://localhost:8000/ordem/Status/"+ id, { Status:this.Executar})
   .then(res => {
     console.log(res);
     })
    },
    Progress: function(){
       this.PageOrder = !this.PageOrder;
      this.PageProgress = !this.PageProgress;

       axios.get("http://localhost:8000/ordem/mostrar/2" )
 .then(res => { 
   console.log(res);
   this.ordemProgress = res.data; 
 })
  
    },
    write: function(){
     this.PageProgress = !this.PageProgress;
     this.PageWrite = !this.PageWrite;
    },
    ToWrite: function(){
  this.PageWrite = !this.PageWrite;
    this.PageOrder = !this.PageOrder;
    },
    ProgressWrite: function(){
this.PageWrite = !this.PageWrite;
 this.PageProgress = !this.PageProgress;

       axios.get("http://localhost:8000/ordem/mostrar/2" )
 .then(res => { 
   console.log(res);
   this.ordemProgress = res.data; 
 })
    },
    Finalized: function(){
       this.PageOrder = !this.PageOrder;
      this.PageFinalized = !this.PageFinalized;
  
 axios.get("http://localhost:8000/ordem/mostrar/0" )
 .then(res => { 
   console.log(res)
   this.ordems = res.data; 
 })

    },
     cadastrar: function(){
    axios.post("http://localhost:8000/ordem/cadastrar",{Setor:this.Setor, Tag:this.Tag, Problemas:this.Problemas, Status:this.Status})
   .then(res => {
     console.log(res);
    
   })
    },
       register: function(){
    axios.post("http://localhost:8000/relatorio/cadastrar",{Setor:this.Setor, Maquina:this.Maquina, Tag:this.Tag, Registro:this.Registro,
    Data_inicio:this.Data_inicio, Data_fim:this.Data_fim, Laudo:this.Laudo, Problema:this.Problema, Resumo:this.Resumo, Pecas:this.Pecas,
    Status:this.Status})
   .then(res => {
     console.log(res);
    
   })
    }
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
  width: 25.33%;
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
