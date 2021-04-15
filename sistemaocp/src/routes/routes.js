import Layout from "@/pages/Layout/Menu.vue";

import Home from "@/views/Home.vue";
import Login from "@/views/Login.vue";
import Dashboard from "@/pages/Dashboard.vue";
import Usuarios from "@/pages/Usuarios.vue";
import Relatorios from "@/pages/Relatorios.vue";
import Maquinas from "@/pages/Maquinas.vue";
import Ordens from "@/pages/Ordens.vue";
import UpgradeToPRO from "@/pages/UpgradeToPRO.vue";

const routes = [
  {
    path: "/",
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
        path: "relatorios",
        name: "Relatorios",
        component: Relatorios
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
        path: "upgrade",
        name: "Upgrade to PRO",
        component: UpgradeToPRO
      }
    ]
  }
];

export default routes;
