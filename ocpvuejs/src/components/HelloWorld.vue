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
    display: table;
    width: 100%;
    height: 95vh;
    background:  url("../assets/home.jpg") no-repeat ;
    background-position: 10% 60%;
    background-size: cover;
}
</style>
