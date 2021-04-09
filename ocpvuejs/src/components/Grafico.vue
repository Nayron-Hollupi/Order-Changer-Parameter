<template>
  <div class="home">
   
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.home{
 
    width: 50%;
    height: 100vh;
    background:  url("../assets/OCP.png") no-repeat ;
    background-position: 10% 10%;
    background-size: cover;
}
</style>
