<template>
  <form>
    <md-card>
      <md-card-header  data-background-color="green">
        <h4 class="title" style="text-align:center">Cadastrar Maquina</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Digite o Setor</label>
              <md-input v-model="Setor" type="text"></md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Digite o Tag</label>
              <md-input v-model="Tag" type="text"></md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Maquina</label>
              <md-input v-model="Maquina" type="text"></md-input>
            </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
               <md-button  @click="cadastrar()" class="md-raised md-info">Cadastrar</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>
  </form>
</template>

<script>
import axios from 'axios';
export default {
  props: {
   
  },
  data() {
    return {
     Setor: "",
     Tag: "",
     Maquina: ""
    };
  },
  methods:{
    cadastrar: function(){
    axios.post( "http://localhost:8000/maquinas/cadastrar",{Setor:this.Setor, Tag:this.Tag, Maquina:this.Maquina })
   .then(res => {
     console.log(res);
     this.maquinas = res.data;
   })
    }
  }
};
</script>
<style></style>
