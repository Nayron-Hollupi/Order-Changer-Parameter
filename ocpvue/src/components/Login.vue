<template>
 <form id="app" @submit="checkForm" action="" method="post">
<div class="container">
  <div class ="box"> 
    <div class="form-group">
    <h1>{{title}}</h1>
    </div>
    <div class="form-group">
    <input id="name"  class="form-control"  type="text"  placeholder="Seu login">
    </div>
 
    <div class="form-group">
    <input id="password"  class="form-control"  type="text" placeholder="Sua senha" >
    </div>

    <div class="form-group">
    <button type="submit" @click="page == 2" class="btn btn-primary mb-2 form-control">Enviar</button>
    </div>
  </div>
</div>
</form>
 
</template>

<script>
export default {
  name: 'Login',
  data(){
    return{
    title: "Login"
   } },
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.container {
width: 100vw;
height: 100vh;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
text-align: center;
 font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 0px;

}

.box {
  width: 300px;
height: 300px;

}

</style>
