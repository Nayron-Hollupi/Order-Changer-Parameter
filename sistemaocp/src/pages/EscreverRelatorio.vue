<template>

  <form>
       <br>
     <header>
           <nav>
    <ol>
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>
        <li>
        <a href="http://localhost:8080/#/Ordens">Ordens</a>
      </li>
        <li>
        <a href="http://localhost:8080/#/Ordens/Andamento">Ordens em andamento</a>
      </li>
      <li>
        <b >Escrever Relatorio</b>
      </li>
      
    </ol>
  </nav>
    </header>
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
 <div class="md-layout-item md-small-size-100 md-size-80 ">
            <md-field>
              <label>Digite o Status</label>
                <md-input v-model="Status" type="text"></md-input>
           
            </md-field>
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
</template>
<script>

import axios from 'axios';
export default {
   components: {
    
  },
  props: {
  
  },
 data() {
    return {
      selected: "",
     maquinas: []
    };
  },
  methods:{
    cadastrar: function(){
    axios.post("http://localhost:8000/relatorio/cadastrar",{Setor:this.Setor, Maquina:this.Maquina, Tag:this.Tag, Registro:this.Registro,
    Data_inicio:this.Data_inicio, Data_fim:this.Data_fim, Laudo:this.Laudo, Problema:this.Problema, Resumo:this.Resumo, Pecas:this.Pecas,
    Status:this.Status})
   .then(res => {
     console.log(res);
    
   })
    }
  }
};
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

ol {
  display: table-row;
  list-style: none;
  text-align: center;
}

li {
  display: table-cell;
  vertical-align: middle;
  width: 25%;
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


  