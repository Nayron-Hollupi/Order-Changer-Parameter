import Layout from "@/pages/Layout/Menu.vue";

import Home from "@/views/Home.vue";
import Login from "@/views/Login.vue";
import Dashboard from "@/pages/Dashboard.vue";
import Usuarios from "@/pages/Usuarios.vue";
import Relatorios from "@/pages/Relatorios.vue";
import Maquinas from "@/pages/Maquinas.vue";
import Ordens from "@/pages/Ordens.vue";
import UpgradeToPRO from "@/pages/UpgradeToPRO.vue";
import CadastrarUsuario from "@/pages/CadastrarUsuario.vue";
import CadastrarMaquina from "@/pages/CadastrarMaquina.vue";
import AbrirOrdem from "@/pages/AbrirOrdem.vue";
import OrdemAbertas from "@/pages/OrdemAbertas.vue";
import OrdemAndamento from "@/pages/OrdemAndamento.vue";
import OrdemFinalizadas from "@/pages/OrdemFinalizadas.vue";
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
      },
      {
        path: "usuario/cadastrar",
        name: "Cadastrar Usuario",
        component: CadastrarUsuario
      },
      {
        path: "maquinas/cadastrar",
        name: "Cadastrar Maquina",
        component: CadastrarMaquina
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
      }
         
    ]
  }
];

export default routes;
