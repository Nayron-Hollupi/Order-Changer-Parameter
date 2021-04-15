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
               
                <md-button class="md-success" @click="notifyVue('top','left')">Abrir Ordem</md-button>
                <md-button class="md-danger" @click="notifyVue('top','center')">Ordens Abertas</md-button>
                <md-button class="md-warning" @click="notifyVue('top','right')">Ordens em andamento</md-button>
                <md-button class="md-info" @click="notifyVue('bottom','left')">Ordens Finalizadas</md-button>
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
      type: ['', 'info', 'success', 'warning', 'danger'],
      notifications: {
        topCenter: false
      }
    }
  },
  methods: {
    notifyVue (verticalAlign, horizontalAlign) {
      var color = Math.floor((Math.random() * 4) + 1)
      this.$notify(
        {
          message: 'Welcome to <b>Material Dashboard</b> - a beautiful freebie for every web developer.',
          icon: 'add_alert',
          horizontalAlign: horizontalAlign,
          verticalAlign: verticalAlign,
          type: this.type[color]
        })
    }
  }
}

</script>
