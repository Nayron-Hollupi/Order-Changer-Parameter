<template>
  <div class="content">
   
    <div class="md-layout">
  <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="blue">
            <h4 class="title" style="text-align:center">Ordens Finalizadas</h4>
          </md-card-header>
          <md-card-content>
            <relatorio-table table-header-color="blue"></relatorio-table>
             
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>
</template>

<script>
import { RelatorioTable } from "@/components";

export default {
  components: {
  
    RelatorioTable
   
   
  }
};
</script>
