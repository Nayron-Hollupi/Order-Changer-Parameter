import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/login",
    name: "Login",
    component: () =>
      import( "../views/Login.vue"),
  },

  {
    path: "/dashboard",
    name: "Dashboard",
    component: () =>
      import( "../views/Dashboard.vue"),
  },
  {
  path: "/Abrir-Ordem",
  name: "Abrir-Ordem",
  component: () =>
    import( "../views/Abrir-Ordem.vue"),
},

{
  path: "/Ordens-Abertas",
  name: "Ordens-Abertas",
  component: () =>
    import( "../views/Ordens-Abertas.vue"),
},
{
  path: "/Ordens-Finalizadas",
  name: "Ordens-Finalizadas",
  component: () =>
    import( "../views/Ordens-Finalizadas.vue"),
},

{
  path: "/Visualizar-maquinas",
  name: "Visualizar-maquinas",
  component: () =>
    import( "../views/Visualizar-maquinas.vue"),
},

{
  path: "/Cadastrar-maquinas",
  name: "Cadastrar-maquinas",
  component: () =>
    import( "../views/Cadastrar-maquinas.vue"),
},

{
  path: "/Visualizar-usuario",
  name: "Visualizar-usuario",
  component: () =>
    import( "../views/Visualizar-usuario.vue"),
},

{
  path: "/Cadastrar-usuario",
  name: "Cadastrar-usuario",
  component: () =>
    import( "../views/Cadastrar-usuario.vue"),
},


];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
