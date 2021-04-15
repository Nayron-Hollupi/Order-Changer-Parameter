<template>
  <div class="content">
    <div class="md-layout">
      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title">Simple Table</h4>
            <p class="category">Here is a subtitle for this table</p>
          </md-card-header>
          <md-card-content>
            <analista-table table-header-color="green"></analista-table>
             
          </md-card-content>
        </md-card>
      </div>

      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card class="md-card-plain">
          <md-card-header data-background-color="green">
            <h4 class="title">Table on Plain Background</h4>
            <p class="category">Here is a subtitle for this table</p>
          </md-card-header>
          <md-card-content>
            <gestor-table></gestor-table>
          </md-card-content>
        
        </md-card>
      </div>
         <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title">Simple Table</h4>
            <p class="category">Here is a subtitle for this table</p>
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
