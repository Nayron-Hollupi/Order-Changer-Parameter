import Vue from "vue";
import VueRouter from "vue-router";
import App from "./App";
import axios from 'axios';
import VueAxios from 'vue-axios';
import routes from "./routes/routes";
import './plugins/vuetify';



import GlobalComponents from "./globalComponents";
import GlobalDirectives from "./globalDirectives";
import Notifications from "./components/NotificationPlugin";


import MaterialDashboard from "./material-dashboard";

import Chartist from "chartist";

const router = new VueRouter({
  routes

});

router.beforeEach((to, from, next) => {
  const token = window.localStorage.getItem('token')
  if (to.fullPath === '/Login') {
    if (token) {
      next('/Login')
    } else {
      next()
    }
  } else {
    if (token) {
      next()
    } else {
      next('/Login')
    }
  }
})
export default router;
Vue.prototype.$Chartist = Chartist;

Vue.use(VueRouter);
Vue.use(MaterialDashboard);
Vue.use(GlobalComponents);
Vue.use(GlobalDirectives);
Vue.use(Notifications);
Vue.use(VueAxios, axios);

/* eslint-disable no-new */
new Vue({
  el: "#app",
  render: h => h(App),
  router,
  data: {
    Chartist: Chartist
  }
});
