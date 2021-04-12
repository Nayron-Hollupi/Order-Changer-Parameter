<template>
  <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Order Change Parameter</a>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded"
            src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture"/>
        </div>
        <div class="user-info">
          <span class="user-name">Usuario
            <strong>Nayron</strong> </span>
          <span class="user-role">Analista</span>
          <span class="user-status"> Online </span>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>PCM</span>
          </li>
          <li class="sidebar-dropdown">
            <router-link to="/Dashboard"><span>Dashboard</span></router-link>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <span @click="Ordens()">Ordens</span>
            </a>
            <div :class="{ 'sidebar-submenu': !ordens, 'sidebar-submenu': ordens }" >
              <ul>
                <li>
                  <router-link to="/Abrir-Ordem"><span>Abrir ordem</span></router-link>
                </li>
                <li>
                  <router-link to="/Ordens-Abertas"><span>Abertas</span></router-link>
                </li>
                <li>
                  <router-link to="/Ordens-Finalizadas"><span>Finalizadas</span></router-link >
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <span @click="Maquinas()">Maquinas</span>
            </a>
            <div :class="{'sidebar-submenu': !maquinas,'sidebar-submenu': maquinas,}">
              <ul>
                <li>
                  <router-link to="/Visualizar-maquinas"
                    ><span>Visualizar</span></router-link
                  >
                </li>
                <li>
                  <router-link to="/Cadastrar-maquinas"
                    ><span>Cadastrar</span></router-link
                  >
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <span @click="Usuarios()">Usuario</span>
            </a>
            <div
              :class="{'sidebar-submenu': !usuarios,'sidebar-submenu': usuarios,}" >
              <ul>
                <li>
                  <router-link to="/Visualizar-usuario"
                    ><span>Visualizar</span></router-link
                  >
                </li>
                <li>
                  <router-link to="/Cadastrar-usuario"
                    ><span>Cadastrar</span></router-link
                  >
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
 
  </nav>
</template>

<script>
export default {
  data() {
    return {
      ordens: true,
      maquinas: true,
      usuarios: true,
    };
  },
  props: {},
  methods: {
    Ordens: function () {
      this.ordens = !this.ordens;
    },

    Maquinas: function () {
      this.maquinas = !this.maquinas;
    },

    Usuarios: function () {
      this.usuarios = !this.usuarios;
    },
  },
};
</script>




<style scoped >
body {
  font-size: 0.9rem;
}
/*----------------toggeled sidebar----------------*/

.page-wrapper.toggled .sidebar-wrapper {
  left: 0px;
}
/*----------------sidebar-wrapper----------------*/

.sidebar-wrapper {
  width: 260px;
  height: 100%;
  max-height: 100%;
  position: fixed;
  top: 0;
  left: -300px;
  z-index: 999;
}

.sidebar-wrapper ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar-wrapper a {
  text-decoration: none;
}

/*--------------------sidebar-brand----------------------*/

.sidebar-wrapper .sidebar-brand {
  padding: 10px 20px;
  display: flex;
  align-items: center;
}

.sidebar-wrapper .sidebar-brand > a {
  text-transform: uppercase;
  font-weight: bold;
  flex-grow: 1;
}

/*--------------------sidebar-header----------------------*/

.sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic {
  float: left;
  width: 60px;
  padding: 2px;
  border-radius: 12px;
  margin-right: 15px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.sidebar-wrapper .sidebar-header .user-info {
  float: left;
}

.sidebar-wrapper .sidebar-header .user-info > span {
  display: block;
}

.sidebar-wrapper .sidebar-header .user-info .user-role {
  font-size: 12px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status {
  font-size: 11px;
  margin-top: 4px;
}


/*----------------------sidebar-menu-------------------------*/

.sidebar-wrapper .sidebar-menu {
  padding-bottom: 30px;
}

.sidebar-wrapper .sidebar-menu .header-menu span {
  font-weight: bold;
  font-size: 14px;
  padding: 15px 20px 5px 20px;
  display: inline-block;
}

.sidebar-wrapper .sidebar-menu ul li a {
  display: inline-block;
  width: 100%;
  text-decoration: none;
  position: relative;
  padding: 8px 30px 8px 20px;
}

.sidebar-wrapper .sidebar-menu ul li a i {
  margin-right: 10px;
  font-size: 12px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
}


.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
  padding: 5px 0;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
  padding-left: 25px;
  font-size: 13px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
  content: "\f111";
  font-family: "Font Awesome 5 Free";
  font-weight: 400;
  font-style: normal;
  display: inline-block;
  text-align: center;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-right: 10px;
  font-size: 8px;
}

.sidebar-wrapper .sidebar-menu ul li a span.label,
.sidebar-wrapper .sidebar-menu ul li a span.badge {
  float: right;
  margin-top: 8px;
  margin-left: 5px;
}

.sidebar-wrapper .sidebar-menu .sidebar-submenu {
  display: none;
}



/*-----------------------------chiller-theme--------------------------*/

.sidebar-wrapper {
  background: #31353d;
}

.sidebar-wrapper .sidebar-header,
.sidebar-wrapper .sidebar-menu {
  border-top: 1px solid #3a3f48;
}

.sidebar-wrapper .sidebar-header .user-info .user-status,
.sidebar-wrapper .sidebar-brand > a,
.sidebar-wrapper .sidebar-menu ul li a {
  color: #818896;
}

.sidebar-wrapper .sidebar-menu ul li:hover > a,
.sidebar-wrapper .sidebar-header .user-info{
  color: #ffffff;
}

/*----color submenu------*/
 .sidebar-menu .sidebar-dropdown div {
  background: #3a3f48;
}

/*---Color  menu -----*/
  .header-menu span {
  color: #e7e7e7;
}

/* --- esconder  o menu-------------*/
@media screen and (min-width: 768px) {
  .page-wrapper.toggled .page-content {
    padding-left: 300px;
  }
}
</style>
