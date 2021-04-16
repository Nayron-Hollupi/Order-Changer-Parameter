<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Setor">{{ item.setor }}</md-table-cell>
        <md-table-cell md-label="Maquina">{{ item.maquina }}</md-table-cell>
        <md-table-cell md-label="Problema">{{ item.problema }}</md-table-cell>
         <md-table-cell >  <button type="button" class="btn btn-warning me-md-6">Executar</button></md-table-cell>
      
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "ordem-table",
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
          setor: "Usinagem",
          maquina: "D 800",
          problema: " alarme no eixo Z"

        }, {
          setor: "Usinagem",
          maquina: "D 800",
          problema: " alarme no eixo Z"

        }, {
          setor: "Usinagem",
          maquina: "D 800",
          problema: " alarme no eixo Z"

        }

      ]
    };
  }
};
</script>
