<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Registro">{{ item.registro }}</md-table-cell>
        <md-table-cell md-label="Name">{{ item.name }}</md-table-cell>
        <md-table-cell md-label="email">{{ item.email }}</md-table-cell>
        <md-table-cell >  <button type="button" class="btn btn-warning me-md-6">Editar</button></md-table-cell>
     <md-table-cell >  <button type="button" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
      
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "gestor-table",
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
           name: "Daniel Sadala     ",
          registro: "7512",
          email: "Daniel@ocp.com.br"
        }

      ]
    };
  }
};
</script>
