<template>
  <form>
    <br>
   <header>
           <nav>
    <ol>
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>
       <li>
        <a href="http://localhost:8080/#/relatorios">Relatorios</a>
      </li>
      <li>
        <b >Visualizar Relatorio</b>
      </li>
      
    </ol>
  </nav>
    </header>
    
    <md-card>
      <md-card-header data-background-color="blue" style="text-align:center">
        <h4 class="title">Relatorio </h4>
        <p class="category">Cu-00011 </p>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Numero da ordem</label>
              <md-input v-model="numero" ></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Setor</label>
              <md-input v-model="setor" type="text"></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Maquina</label>
              <md-input v-model="maquina" type="email"></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Registro do tecnico</label>
              <md-input v-model="registro_do_tecnico " type="text"></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Inicio</label>
              <md-input v-model="Data_inicio" type="text"></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Fim </label>
              <md-input v-model="Data_fim" type="text"></md-input>
            </md-field>
          </div>
          
    
          <div class="md-layout-item md-size-100">
            <md-field maxlength="1">
              <label>Laudo Tecnico</label>
              <md-textarea v-model="Laudo_tecnico"></md-textarea>
            </md-field>
          </div>
            <div class="md-layout-item md-size-100">
            <md-field maxlength="1">
              <label>Resumo do Problema</label>
              <md-textarea v-model="Resumo_do_problema"></md-textarea>
            </md-field>
          </div>
            <div class="md-layout-item md-size-100">
            <md-field maxlength="1">
              <label>Peças utilizadas</label>
              <md-textarea v-model="Peças_utilizadas"></md-textarea>
            </md-field>
          </div>
          <div class="md-layout-item md-size-100 text-right">
            <md-button class="md-raised md-info">Salva Relatorio</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>
  </form>
</template>
<script>
export default {
  name: "edit-profile-form",
  props: {
    dataBackgroundColor: {
      type: String,
      default: ""
    }
  },
  data() {
    return {
      username: null,
      disabled: null,
      emailadress: null,
      lastname: null,
      firstname: null,
      address: null,
      city: null,
      country: null,
      code: null,
      aboutme: null
    };
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

