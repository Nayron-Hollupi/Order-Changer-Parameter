<template>
  <div class="content">
    
    <div class="md-layout">
       <div  class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <sidebar-link to="/usuario/cadastrar"> 
      <md-card>
       <div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn btn-primary" type="button">Cadastrar novo usuário</button>
</div>
 </md-card>
      </sidebar-link>
      </div>
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
     <md-table-cell  >  <button type="button" class="btn btn-warning me-md-6">Editar</button></md-table-cell>
     <md-table-cell   >  <button type="button" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
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
     <md-table-cell  >  <button type="button" class="btn btn-warning me-md-6">Editar</button></md-table-cell>
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
     <md-table-cell  >  <button type="button" class="btn btn-warning me-md-6">Editar</button></md-table-cell>
     <md-table-cell   >  <button type="button" @click="excluir(usuario.id)" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
  </md-table-row>
    </md-table></div>
             
          </md-card-content>
        </md-card>
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
      tecnicos: []

    }
  },
  created: function(){
 axios.get("http://localhost:8000/usuario/0")
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
 },  
  methods:{
    cadastrar: function(){
    axios.post( "http://localhost:8000/{id}/cadastrar")
   .then(res => {
     console.log(res);
     this.maquinas = res.data;
   })
    }
  }
      };
</script>


