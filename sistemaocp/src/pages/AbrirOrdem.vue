<template>
  <form>
    <md-card>
      <md-card-header  data-background-color="green">
        <h4 class="title" style="text-align:center">Abrir Ordem</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          
          <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-50">
                <div class="md-layout-item">
        <md-field>
          <md-select v-model="Setor" name="setor" id="setor"   placeholder="Selecione o Setor">
            <md-option v-for="(maquina,id) in maquinas" :key="id"  >{{maquina.Setor}}</md-option>
          </md-select>
        </md-field>
      </div>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
        
           
         
          <div class="md-layout-item md-small-size-100 md-size-50">
           <md-field>
          <md-select v-model="Tag" name="Tag" id="Tag"   placeholder="Selecione a Tag">
             <md-option  v-for="(maquina,id) in maquinas" :key="id">{{maquina.Tag}}</md-option>
           
          </md-select>
        </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-50">
            <md-field>
              <label>Digite o Problema</label>
              <md-input v-model="Problema" type="text"></md-input>
            </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-40">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25">
               <md-button   @click="cadastrar()" class="md-raised md-info">Criar Ordem</md-button>
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
      selected: "",
     maquinas: []
    };
  },
  methods:{
    cadastrar: function(){
    axios.post("http://localhost:8000/ordem/cadastrar",{Setor:this.Setor, Tag:this.Tag, Maquina:this.Maquina, Problema:this.Problema})
   .then(res => {
     console.log(res);
    
   })
    }
  },
 created: function(){
    axios.get("http://localhost:8000/maquinas")
    .then(res => {
      console.log(res);
      this.maquinas = res.data;
    })
  }
};
</script>
<style></style>

  