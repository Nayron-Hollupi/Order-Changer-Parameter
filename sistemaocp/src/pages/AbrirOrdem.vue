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
          <md-select v-model="country" name="country" id="country" placeholder="Selecione o Setor">
            <md-option value="0">Ferramentaria </md-option>
            <md-option value="1">Usunagem</md-option>
            <md-option value="2">Fundição</md-option>
          </md-select>
        </md-field>
      </div>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-50">
                    <div class="md-layout-item">
        <md-field>
          <md-select v-model="country" name="country" id="country" placeholder="Selecione a Maquina">
            <md-option value="0">Romi D 800  </md-option>
            <md-option value="1">Romi D 600 </md-option>
            <md-option value="2">Romi D 800 </md-option>
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
          <md-select v-model="country" name="country" id="country" placeholder="Selecione a Tag">
            <md-option value="0"> CU-0001 </md-option>
            <md-option value="1"> CU-0002</md-option>
            <md-option value="2">CU-0005</md-option>
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
              <md-input v-model="firstname" type="text"></md-input>
            </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-40">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-25">
               <md-button class="md-raised md-info">Criar Ordem</md-button>
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
    
      city: null,
      country: null,
      code: null,
    
    };
  }
};
</script>
<style></style>
