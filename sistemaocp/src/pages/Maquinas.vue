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
            <maquinas-table table-header-color="green"></maquinas-table>
             
          </md-card-content>
        </md-card>
      </div>

    </div>
  </div>
</template>

<script>
import {MaquinasTable } from "@/components";

export default {
  components: {
 
    MaquinasTable
 
   
  }
};
</script>
