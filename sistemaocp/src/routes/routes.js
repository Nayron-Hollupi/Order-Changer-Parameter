

import Layout from "@/pages/Layout/Menu.vue";

import Home from "@/views/Home.vue";
import Login from "@/views/Login.vue";
import Dashboard from "@/pages/Dashboard.vue";
import Usuarios from "@/pages/Usuarios.vue";
import Maquinas from "@/pages/Maquinas.vue";
import Ordens from "@/pages/Ordens.vue";



import Logout from "@/pages/Logout.vue";



const routes = [
  {
    
    path: "/Home",
    name: "Home",
    component: Home
  },
  {
    path: "/Login",
    name: "Login",
    component: Login
  },
  {
    path: "/",
    component: Layout,
    redirect: "/dashboard",
    children: [
      {
        path: "dashboard",
        name: "Dashboard",
        component: Dashboard
      },
     
      {
        path: "usuarios",
        name: "Usuarios",
        component: Usuarios
      },
    
      {
        path: "maquinas",
        name: "Maquinas",
        component: Maquinas
      },
      {
        path: "ordens",
        name: "Ordens",
        component: Ordens
      },
 
      {
        path: "logout",
        name: "Logout",
        component: Logout
      }, ]
      
  }
  
]


export default routes;
