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
       
        }

      ]
    };
  },
 mounted () {
   this.axios.post('http://localhost:8000/usuarios/1', this.data, {
   headers: {
          // remove headers
        }
      }).then(res => {
        console.log(res);
      }).catch(err => {
        console.log(err.response);
      });
  }
  
  
 // const requestOptions = {
  //  method: "POST",
  //  headers: { "Content-Type": "application/json" },
  //  body: JSON.stringify({ 
 
  //    usuario: this.usuarioField.value,
    //  password: this.passwordField.value })
 // };
  //fetch("http://localhost:800/login", requestOptions)
 //   .then(res =>res.json())
  //.then(resData => console.log(resData))
 // .catch(erro => console.log(erro));
  
};
</script>
