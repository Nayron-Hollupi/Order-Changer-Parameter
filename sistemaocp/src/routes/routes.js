import Layout from "@/pages/Layout/Menu.vue";

import Home from "@/views/Home.vue";
import Login from "@/views/Login.vue";
import Dashboard from "@/pages/Dashboard.vue";
import Usuarios from "@/pages/Usuarios.vue";
import Relatorios from "@/pages/Relatorios.vue";
import Maquinas from "@/pages/Maquinas.vue";
import Ordens from "@/pages/Ordens.vue";



import Logout from "@/pages/Logout.vue";

import AbrirOrdem from "@/pages/AbrirOrdem.vue";
import OrdemAbertas from "@/pages/OrdemAbertas.vue";
import OrdemAndamento from "@/pages/OrdemAndamento.vue";
import OrdemFinalizadas from "@/pages/OrdemFinalizadas.vue";
import VisualizarRelatorio from "@/pages/VisualizarRelatorio.vue";
import EscreverRelatorio from "@/pages/EscreverRelatorio.vue";

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
        path: "logout",
        name: "Logout",
        component: Logout
      },
      
      {
        path: "ordens/abrir",
        name: "Abrir Ordem",
        component: AbrirOrdem
      },
      {
        path: "ordens/abertas",
        name: "Ordens Abertas",
        component: OrdemAbertas
      },
      {
        path: "ordens/Andamento",
        name: "Ordens em andamento",
        component: OrdemAndamento
      },
      {
        path: "ordens/Finalizadas",
        name: "Ordem Finalizadas",
        component: OrdemFinalizadas
      },
      {
        path: "relatorios/visualizar",
        name: " Visualizar Relatorios",
        component: VisualizarRelatorio
      },
      {
        path: "relatorios/escrever",
        name: "Escrever Relatorio",
        component: EscreverRelatorio
      }

         
    ]
  }
];

export default routes;
