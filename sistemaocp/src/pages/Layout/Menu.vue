<template>

  <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
    

    <side-bar  :sidebar-item-color="sidebarBackground"  :sidebar-background-image="sidebarBackgroundImage">
      <sidebar-link to="/dashboard">
        <md-icon>space_dashboard</md-icon>
        <p>Dashboard</p>
      </sidebar-link>
      <sidebar-link to="/usuarios">
        <md-icon>person</md-icon>
        <p>Usuários</p>
      </sidebar-link>
      
      <sidebar-link to="/Maquinas">
        <md-icon>precision_manufacturing</md-icon>
        <p>Máquinas</p>
      </sidebar-link>
      <sidebar-link to="/Ordens">
        <md-icon>file_copy</md-icon>
        <p>Ordens</p>
      </sidebar-link>
   
   
      <sidebar-link to="" @click="logout()" class="active-pro">
        <md-icon @click="logout()" >logout</md-icon>
        <p  @click="logout()">Sair</p>
      </sidebar-link>
    </side-bar>

    <div class="main-panel">
      

      <dashboard-content> </dashboard-content>

   
    </div>
  </div>
</template>

<script>
import DashboardContent from "./Content.vue";


export default {
  components: {
  
    DashboardContent,
  
  },
  data() {
    return {
      sidebarBackground: "blue",
      sidebarBackgroundImage: require("@/assets/img/industria4.0.png")
    };
  },
  methods: {
      logout() {
        window.localStorage.removeItem('token')
        this.$router.push('/Login')
      }
  }
};
</script>
