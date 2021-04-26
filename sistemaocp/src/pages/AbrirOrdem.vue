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
        <b >Abrir Ordem</b>
      </li>
      
    </ol>
  </nav>
    </header>
    <md-card>
      <md-card-header  data-background-color="green">
        <h4 class="title" style="text-align:center">Abrir Ordem</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          
          <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-50">
                <div class="md-layout-item">
        <md-field>
          <md-select v-model="Setor" name="setor" id="setor"   placeholder="Selecione o Setor">
            <md-option v-for="(maquina,id) in maquinas" :key="id"  >{{maquina.Setor}}</md-option>
          </md-select>
        </md-field>
      </div>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
        
           
         
          <div class="md-layout-item md-small-size-100 md-size-50">
           <md-field>
          <md-select v-model="Tag" name="Tag" id="Tag"   placeholder="Selecione a Tag">
             <md-option  v-for="(maquina,id) in maquinas" :key="id">{{maquina.Tag}}</md-option>
           
          </md-select>
        </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-50">
            <md-field>
              <label>Digite o Problema</label>
              <md-input v-model="Problema" type="text"></md-input>
            </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-40">
           
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
    axios.post("http://localhost:8000/ordem/cadastrar",{Setor:this.Setor, Tag:this.Tag, Maquina:this.Maquina, Problema:this.Problema})
   .then(res => {
     console.log(res);
    
   })
    }
  },
 created: function(){
    axios.get("http://localhost:8000/maquinas")
    .then(res => {
      console.log(res);
      this.maquinas = res.data;
    })
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
  width: 33.33%;
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


  