<template>

  <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
    

    <side-bar  :sidebar-item-color="sidebarBackground"  :sidebar-background-image="sidebarBackgroundImage">
      <sidebar-link to="">
        <md-icon>engineering</md-icon>
        <p>{{ loggedUser.usuario }}</p>
      </sidebar-link>
      <sidebar-link to="/dashboard">
        <md-icon>space_dashboard</md-icon>
        <p>Dashboard</p>
      </sidebar-link>
      <sidebar-link to="/usuarios">
        <md-icon>group</md-icon>
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
   
    <sidebar-link to="/">
        <md-icon>menu_book</md-icon>
        <p>Manual do Usuario</p>
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
      usuario: [],
      sidebarBackground: "blue",
      sidebarBackgroundImage: require("@/assets/img/industria4.0.png")
    };
  },
   methods: {
       created: function(){
    axios.post("http://localhost:8000/auth" + loggedUser.token)
   .then(res => {
     
     console.log(res.data);
 this.usuario = res.data; 
    
   })

},
      isLogged() {
        window.localStorage.getItem('token')
          ? this.logged = true
          : this.logged = false
      },
      logout() {
        window.localStorage.removeItem('token')
        this.$router.push('/login')
      }
    },
    computed: {
      loggedUser() {
        const token = window.localStorage.getItem('token')
        const payload = JSON.parse(atob(token.split('.')[1]))
        return payload
      }
    },
    mounted() {
      this.isLogged()
    }
};
</script>
