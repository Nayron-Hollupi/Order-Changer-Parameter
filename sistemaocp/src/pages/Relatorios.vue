<template>
  <div class="content">
   
    <div class="md-layout">
  <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="blue">
            <h4 class="title" style="text-align:center">Relatorios</h4>
          </md-card-header>
          <md-card-content>
             <md-table  :table-header-color="tableHeaderColor">
            <md-table-row slot="md-table-row"  v-for="(item,id) in relatorios" :key="id"  > 
        <md-table-cell md-label="Numero">{{ item.id }}</md-table-cell>
        <md-table-cell md-label="Data">{{ item.Data_inicio }}</md-table-cell>
        <md-table-cell md-label="Maquina">{{ item.Tag }}</md-table-cell>
   <md-table-cell >     <sidebar-link to="/relatorios/visualizar">
       <button type="button" class="btn btn-success me-md-6">Visualizar</button>
        </sidebar-link></md-table-cell>  
  </md-table-row></md-table>
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
   
  }, data() {
    return {
      relatorios: []
   
    }
  },
  created: function(){
 axios.get("http://localhost:8000/relatorios")
 .then(res => { 
   console.log(res);
   this.relatorios = res.data; 
 })
 }
};
</script>
