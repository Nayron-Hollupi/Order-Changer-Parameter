<template>
  <div class="content">
      <header>
           <nav>
    <ol>
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>
      <li>
        <b >Relatorios</b>
      </li>
      
    </ol>
  </nav>
    </header>
    <div class="md-layout">
  <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="blue">
            <h4 class="title" style="text-align:center">Relatorios</h4>
          </md-card-header>
          <md-card-content>
             <md-table  :table-header-color="tableHeaderColor">
            <md-table-row slot="md-table-row"  v-for="(item,id) in relatorios" :key="id"  > 
        <md-table-cell md-label="Numero">{{ item.id }}</md-table-cell>
        <md-table-cell md-label="Data">{{ item.Data_inicio }}</md-table-cell>
        <md-table-cell md-label="Maquina">{{ item.Tag }}</md-table-cell>
   <md-table-cell >     <sidebar-link to="/relatorios/visualizar">
       <button type="button" class="btn btn-success me-md-6">Visualizar</button>
        </sidebar-link></md-table-cell>  
  </md-table-row></md-table>
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';


export default {
  components: {
   
  }, data() {
    return {
      relatorios: []
   
    }
  },
  created: function(){
 axios.get("http://localhost:8000/relatorios")
 .then(res => { 
   console.log(res);
   this.relatorios = res.data; 
 })
 }
};
</script>


<style scoped>
:root {
  background-color: #def;
  box-shadow: inset 0 0 7rem #fff, inset 0 0 3rem #fff;
  font: normal x-large/1 "Roboto Condensed", sans-serif;
  min-height: 100vh;
}

header {
  background-color: #000;
  color: #fff;
  font-size: .75rem;
  letter-spacing: .05em;
  text-transform: uppercase;
  margin: 0;
}

nav {
  display: table;
  overflow: hidden;
  width: 100%;
}

ol {
  display: table-row;
  list-style: none;
  text-align: center;
}

li {
  display: table-cell;
  vertical-align: middle;
  width: 33.33%;
}

a,
b {
  display: block;
  padding: 15px 0;
  position: relative;
  white-space: nowrap;
  
}

a::after {
  background-color: #000;
  border-radius: 0 0 0 48px;
  box-shadow: 3px -3px 0 3px #def;
  content: "";
  height: 48px;
  position: absolute;
  right: -24px;
  top: 0;
  transform: scale(.707) rotate(45deg);
  width: 48px;
  z-index: 1;
    color: #fff;
}

a,
a:link,
a:visited,
a:hover,
a:active,
a:focus {
  color: #fff;
  text-decoration: none;
}

a:hover,
a:hover::after {
  background-color: #3c3c3c;
  
}

b {
  background-color: #777;
  font: inherit;
}
</style>
