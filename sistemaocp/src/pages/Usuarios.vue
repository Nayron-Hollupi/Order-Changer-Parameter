<template>
  <div class="content">
     <div  class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <sidebar-link to="/usuario/cadastrar"> 
      <md-card>
       <div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn btn-primary" type="button">Cadastrar novo usuário</button>
</div>
 </md-card>
      </sidebar-link>
      </div>
    <div class="md-layout">
    
       
      
      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Analistas cadastrados</h4>
          </md-card-header>
          <md-card-content>
            <analista-table table-header-color="green"></analista-table>
             
          </md-card-content>
        </md-card>
      </div>

        <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Gestores cadastrados</h4>
          </md-card-header>
          <md-card-content>
            <gestor-table table-header-color="green"></gestor-table>
             
          </md-card-content>
        </md-card>
      </div>


         <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Tecnicos cadastrados</h4>
          </md-card-header>
          <md-card-content>
            <tecnico-table table-header-color="green"></tecnico-table>
             
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>
</template>

<script>
import { AnalistaTable, GestorTable, TecnicoTable } from "@/components";

export default {
  components: {
    GestorTable,
    AnalistaTable,
    TecnicoTable
   
  }
};
</script>
