<template>
  <div class="content">
    <div class="md-layout">
      <div class="md-layout-item">
      <notifications></notifications>
      <md-card>
        <md-card-header data-background-color="green">
          <h4 class="title" style="text-align:center">Ordens</h4>
        </md-card-header>
        <md-card-content>
          <div class="md-layout">
            <div class="md-layout-item md-size-100">
              <div class="places-buttons text-center">
                 <sidebar-link to="ordens/abrir">
                <md-button class="md-success" >Abrir Ordem</md-button>
                </sidebar-link>
               <sidebar-link to="ordens/abertas">
               <md-button class="md-danger" >Ordens Abertas</md-button>
                </sidebar-link>
                 <sidebar-link to="ordens/Andamento">
                <md-button class="md-warning" >Ordens em andamento</md-button>
                </sidebar-link>
                 <sidebar-link to="ordens/Finalizadas">
             <md-button class="md-info" >Ordens Finalizadas</md-button>
                </sidebar-link>
              </div>
            </div>
          </div>
        </md-card-content>
      </md-card>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {

    }
  }
}
</script>
