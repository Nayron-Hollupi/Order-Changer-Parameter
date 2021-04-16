<template>
  <div class="content">
   
    <div class="md-layout">
  <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="orange">
            <h4 class="title" style="text-align:center">Ordens em andamento</h4>
          </md-card-header>
          <md-card-content>
            <ordem-table table-header-color="orange"></ordem-table>
             
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>
</template>

<script>
import { OrdemTable } from "@/components";

export default {
  components: {
  
    OrdemTable
   
   
  }
};
</script>
