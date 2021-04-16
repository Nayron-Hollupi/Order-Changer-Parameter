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
  name: "analista-table",
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
          name: "Nayron Victor Hollupi",
          registro: "8987",
          email: "nayron@ocp.com.br",

        }

      ]
    };
  },
  
  mounted () {
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => (this.info = response))
  }
  
};
</script>
