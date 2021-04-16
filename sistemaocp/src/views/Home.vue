<template>
       <router-link to="/Login"  class="home"></router-link>
</template>

<script>

export default {
  name: "Home",
  components: {
 
  },
};
</script>

<style scoped>
* {
  padding:0;
  margin:0;
}
.home{
  display: table;
  width: 100%;
  height: 100vh;
  padding: 100px 0;
  color: white;
  background: url("../assets/home.jpg") no-repeat bottom center scroll;
  background-position: 30% 45%;
  background-size: cover;
}
</style>