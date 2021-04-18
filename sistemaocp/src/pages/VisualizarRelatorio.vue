<template>
  <form>

    
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
<style></style>
