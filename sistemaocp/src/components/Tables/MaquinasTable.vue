<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Setor">{{ item.setor }}</md-table-cell>
        <md-table-cell md-label="Tag">{{ item.tag }}</md-table-cell>
        <md-table-cell md-label="Maquina">{{ item.maquina }}</md-table-cell>
        <md-table-cell >  <button type="button" class="btn btn-warning me-md-6">Editar</button></md-table-cell>
     <md-table-cell >  <button type="button" class="btn btn-danger me-md-6">Excluir</button></md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "maquinas-table",
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
          setor: "Usinagem ",
          tag: "CU- 0001",
          maquina: "Romi Discovery 1200"
        },
        {
         setor: "Usinagem ",
          tag: "CU- 0002",
          maquina: "Romi D 800"
        },
        {
           setor: "Usinagem ",
          tag: "CU- 0003",
          maquina: "Romi D 600"
        },
        {
          setor: "Ferramentaria",
          tag: "TN - 0001",
          maquina: "ROMI GL 240 "
        },
          {
          setor: "Ferramentaria",
          tag: "TN - 0002",
          maquina: "ROMI G 550 "
        }
      ]
    };
  }
};
</script>
