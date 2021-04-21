<template>
  <div class="content">
 
    <div class="md-layout">

         <div  class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <sidebar-link to="/maquinas/cadastrar"> 
      <md-card>
       <div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn btn-primary" type="button">Cadastrar nova maquina</button>
</div>
 </md-card>
      </sidebar-link>
      </div>

      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Maquinas cadastradas</h4>
          </md-card-header>
          <md-card-content>
            <div table-header-color="green" >  <md-table  :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row"  v-for="(maquina,id) in maquinas" :key="id"  > 
        <md-table-cell md-label="Registro" >{{maquina.Setor}}</md-table-cell>
        <md-table-cell md-label="Usuario"  >{{maquina.Tag}}</md-table-cell>
        <md-table-cell md-label="email" >{{maquina.Maquina}}</md-table-cell>
     <md-table-cell  >  <button type="button" class="btn btn-warning me-md-6">Editar</button></md-table-cell>
     <md-table-cell   >  <button type="button" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
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
  data(){
    return{
      maquinas: []
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
