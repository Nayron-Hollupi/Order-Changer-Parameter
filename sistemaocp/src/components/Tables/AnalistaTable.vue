<template>
  <div>
    <md-table  :table-header-color="tableHeaderColor">
   
      <md-table-row slot="md-table-row" v-for="(usuario,id) in analistas" :key="id" > 
        <md-table-cell md-label="Registro">{{usuario.registro}}</md-table-cell>
        <md-table-cell md-label="Usuario">{{usuario.usuario}}</md-table-cell>
        <md-table-cell md-label="email">{{usuario.email}}</md-table-cell>
     <md-table-cell >  <button type="button" class="btn btn-warning me-md-6">Editar</button></md-table-cell>
     <md-table-cell >  <button type="button" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
  </md-table-row>
    </md-table>
  </div>
</template>


<script>
import axios from 'axios';


export default { 
  name: "analista-table",
  components: {

   
  },
  props:{
      usuario: String,
      registro: String,
      email: String,
       tableHeaderColor: {
      type: String,
      default: ""
  }
  },
    data() {
    return {
      analistas: [] 
    }
  },
  created: function(){
 axios.get("http://localhost:8000/usuarios")
 .then(res => { 
   console.log(res);
   this.analistas = res.data;

 })

 }
   
 }

</script>
