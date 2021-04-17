<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Numero">{{ item.numero }}</md-table-cell>
        <md-table-cell md-label="Data">{{ item.data }}</md-table-cell>
        <md-table-cell md-label="Maquina">{{ item.tag }}</md-table-cell>
        <md-table-cell >     <sidebar-link to="/relatorios/visualizar">
       <button type="button" class="btn btn-success me-md-6">Visualizar</button>
        </sidebar-link></md-table-cell>  
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "relatorio-table",
  props: {
    tableHeaderColor: {
      type: String,
      default: ""
    }
  },
  data() {
    return {
      selected: [],
      users: [
    
        {
           numero: "1     ",
          data: "14/04/2020",
          tag: "Cu-0001"
        },
         {
           numero: "2    ",
          data: "15/04/2020",
          tag: "Cu-0004"
        },
         {
           numero: "3     ",
          data: "16/04/2020",
          tag: "TN-0001"
        },
         {
           numero: "4     ",
          data: "14/04/2020",
          tag: "Cu-0001"
        },
         {
           numero: "5     ",
          data: "14/04/2020",
          tag: "Cu-0001"
        }





      ]
    };
  }
};
</script>
