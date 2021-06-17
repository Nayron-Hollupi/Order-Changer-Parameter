<template>

  <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
    

    <side-bar  :sidebar-item-color="sidebarBackground" 
     :sidebar-background-image="sidebarBackgroundImage"  
    v-for="(user,id) in usuario" :key="id">
      <sidebar-link to="">
        <md-icon>engineering</md-icon>
        <p>{{user.usuario}}</p>
      </sidebar-link>
      <sidebar-link to="/dashboard">
        <md-icon>space_dashboard</md-icon>
        <p>Dashboard</p>
      </sidebar-link>
      <sidebar-link  v-if="user.Tipo == 'Analista'" to="/usuarios">
        <md-icon>group</md-icon>
        <p>Usuários</p>
      </sidebar-link>
    
      <sidebar-link to="/Maquinas"  v-if="user.Tipo == 'Analista'">
        <md-icon>precision_manufacturing</md-icon>
        <p>Máquinas</p>
      </sidebar-link>

      <sidebar-link to="/Ordens">
        <md-icon>file_copy</md-icon>
        <p>Ordens</p>
      </sidebar-link>
   
    <sidebar-link to="/Manual">
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
import axios from 'axios';
  


export default {
    data: () => ({
      logged: false,
    }),
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
   created: function(){
 axios.post("http://localhost:8000/auth")
 .then(res => { 
   console.log(res.data);
   this.token = res.data;
   if(this.token == false){
  window.localStorage.removeItem('token')
        this.$router.push('/login')
        console.log(usuario)
   }
 }),
  axios.get("http://localhost:8000/usuario/session/" + this.loggedUser.usuario )
 .then(res => { 
   console.log(res.data);
   this.usuario = res.data;
  
 })
  

    } ,
  
   methods: {

      isLogged() {
        window.localStorage.getItem('token')
          ? this.logged = true
          : this.logged = false
      },
      logout() {
        window.localStorage.removeItem('token')
        this.$router.push('/login')
        console.log(usuario)
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
