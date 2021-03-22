<template>
<div id="home">
    
</div>
 <div id="background">
  <Login />
 </div>
</template>

<script>
import Login from './components/Login.vue'

export default {
  name: 'App',
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
    background-position: 10% 50%;
    background-size: cover;
}
</style>
