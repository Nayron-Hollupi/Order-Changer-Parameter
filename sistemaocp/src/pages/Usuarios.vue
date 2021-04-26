<template>
  <div class="content">
     <header>
           <nav>
    <ol>
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>
      <li>
        <b >Usuarios</b>
      </li>
      
    </ol>
  </nav>
    </header>
    <div class="md-layout">
    
      <!----  Apresentação  da lista dos analistas -----> 
      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Analistas cadastrados</h4>
          </md-card-header>
          <md-card-content>
            <div table-header-color="green" >  <md-table  :table-header-color="tableHeaderColor">
  
      <md-table-row slot="md-table-row"  v-for="(usuario,id) in analistas" :key="id"  > 
        <md-table-cell md-label="Registro" >{{usuario.registro}}</md-table-cell>
        <md-table-cell md-label="Usuario"  >{{usuario.usuario}}</md-table-cell>
        <md-table-cell md-label="email" >{{usuario.email}}</md-table-cell>
   <md-table-cell  >   <sidebar-link to="usuarios/editar">
             <md-button class="md-warning" >Editar</md-button>
                </sidebar-link></md-table-cell>   <md-table-cell   >  <button type="button" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
  </md-table-row>
    </md-table></div>
             
          </md-card-content>
        </md-card>
      </div>


   <!----  Apresentação  da lista dos gestores -----> 
      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Gestores cadastrados</h4>
          </md-card-header>
          <md-card-content>
            <div table-header-color="green" >  <md-table  :table-header-color="tableHeaderColor">
  
      <md-table-row slot="md-table-row"  v-for="(usuario,id) in gestores" :key="id"  > 
        <md-table-cell md-label="Registro" >{{usuario.registro}}</md-table-cell>
        <md-table-cell md-label="Usuario"  >{{usuario.usuario}}</md-table-cell>
        <md-table-cell md-label="email" >{{usuario.email}}</md-table-cell>
     <md-table-cell  >   <sidebar-link to="usuarios/editar">
             <md-button class="md-warning" >Editar</md-button>
                </sidebar-link></md-table-cell>
     <md-table-cell   >  <button type="button" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
  </md-table-row>
    </md-table></div>  
          </md-card-content>
        </md-card>
      </div>

        <!----  Apresentação  da lista dos tecnicos -----> 
      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Tecnicos cadastrados</h4>
          </md-card-header>
          <md-card-content>
            <div table-header-color="green" >  <md-table  :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row"  v-for="(usuario,id) in tecnicos" :key="id"  > 
        <md-table-cell md-label="Registro" >{{usuario.registro}}</md-table-cell>
        <md-table-cell md-label="Usuario"  >{{usuario.usuario}}</md-table-cell>
        <md-table-cell md-label="email" >{{usuario.email}}</md-table-cell>
 <md-table-cell  >   <sidebar-link to="usuarios/editar">
             <md-button class="md-warning" >Editar</md-button>
                </sidebar-link></md-table-cell>  <md-table-cell   >  <button type="button" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
  </md-table-row>
    </md-table></div>
             
          </md-card-content>
        </md-card>
      </div>

     <div  class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <sidebar-link to="/usuario/cadastrar"> 
      <md-card>
       <div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn btn-primary" type="button">Cadastrar novo Usuario</button>
</div>
 </md-card>
      </sidebar-link>
      </div>

    </div>
  </div>
  
</template>

<script>
import axios from 'axios';


export default {
  
  components: {
    
  },
   props:{
      usuario: String,
      registro: String,
      email: String,
      nivel: String,
       tableHeaderColor: {
      type: String,
      default: ""
  }
  },
    data() {
    return {
      analistas: [],
      gestores: [],
      tecnicos: [],


    }
  },
  created: function(){
    axios.post("http://localhost:8000/auth", {token:this.token} )
 .then(res => { 
   console.log(res);
  
 }),
 axios.get("http://localhost:8000/usuario/0" )
 .then(res => { 
   console.log(res);
   this.analistas = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/1")
 .then(res => { 
   console.log(res);
   this.gestores = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/2")
 .then(res => { 
   console.log(res);
   this.tecnicos = res.data; 
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
