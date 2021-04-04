<template>
 <div id="app">
<div v-if="page == 0" @click="page = 1" id="home">  
</div>

 <div v-if="page == 1" id="background">
  <Login/>
 </div>

 <div v-if="page == 2" >
    <Menu
		:nav-links="navLinks"
		:image-path="require('./assets/logo.png')"
		background="#fff"
		link-color="#777"
		hoverBackground="#ddd"
    />
  
 </div>
  </div>
</template>

<script>
import Menu from '@/components/Menu'
import Login from './components/Login.vue'

export default {
  components: {
    Menu,
    Login
  },
   data(){
  return{
      page: 0

  }
  },
  data: () => ({
    navLinks: [
        {
        text: 'Nayron',
		path: '',
		icon: 'ion-ios-person'
      },
      {
        text: 'Home',
		path: '/',
		icon: 'ion-ios-home'
      },
      {
        text: 'Ordens',
		path: '/about',
		icon: 'ion-ios-document'
      },
      {
        text: 'Cadastro',
		path: '/blog',
		icon: 'ion-ios-clipboard'
      },
      {
        text: 'Portfolio',
		path: '/portfolio',
		icon: 'ion-ios-briefcase'
      }
    ]
  })
}
</script>

<style lang="scss">
@import 'https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css';

figure {
	margin-block-start: 0;
	margin-block-end: 0;
	margin-inline-start: 10px;
	margin-inline-end: 0;
}

body {
  margin: 0;
}

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}

#background{
    background:  url("./assets/OCP.png") no-repeat ;
  background-size: contain;
  background-position: center;
  width: 100%;
  height: 100vh;
 
}

#home{
    display: table;
    width: 100%;
    height: 100vh;
    background:  url("./assets/home.jpg") no-repeat ;
    background-position: 10% 40%;
    background-size: cover;
}
</style>



