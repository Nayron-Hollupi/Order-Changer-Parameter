<template>

<div v-if="page == 0" @click="page = 1" id="home">  
</div>

 <div v-if="page == 1" id="background">
  <Login />
 </div>

 <div v-if="page == 2" >
  <menu />
 </div>
</template>

<script>
import Login from './components/Login.vue'

export default {
  name: 'App',data(){
  return{
      page: 2
  }
  },
  components: {
    Login
  }
}
</script>

<style>
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
