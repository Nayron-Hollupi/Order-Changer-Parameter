<template>
  <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
    

    <side-bar  :sidebar-item-color="sidebarBackground"  :sidebar-background-image="sidebarBackgroundImage">
      <sidebar-link to="/dashboard">
        <md-icon>space_dashboard</md-icon>
        <p>Dashboard</p>
      </sidebar-link>
      <sidebar-link to="/user">
        <md-icon>person</md-icon>
        <p>Usuários</p>
      </sidebar-link>
      <sidebar-link to="/table">
        <md-icon>content_paste</md-icon>
        <p>Relatórios</p>
      </sidebar-link>
      <sidebar-link to="/typography">
        <md-icon>precision_manufacturing</md-icon>
        <p>Máquinas</p>
      </sidebar-link>
      <sidebar-link to="/icons">
        <md-icon>file_copy</md-icon>
        <p>Ordens</p>
      </sidebar-link>
      <sidebar-link to="/maps">
        <md-icon>precision_manufacturing</md-icon>
        <p>Maps</p>
      </sidebar-link>
      <sidebar-link to="/notifications">
        <md-icon>notifications</md-icon>
        <p>Notifications</p>
      </sidebar-link>
      <sidebar-link to="/upgrade" class="active-pro">
        <md-icon>logout</md-icon>
        <p>Sair</p>
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
  }
};
</script>
