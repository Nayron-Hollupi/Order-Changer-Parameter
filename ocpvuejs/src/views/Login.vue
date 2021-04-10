<template>
 <form  id="background"  method="post"  @submit.prevent="Login">

<div class="container">
  <div class ="box"> 
    <div class="form-group">
    <h1>{{title}}</h1>
    </div>
    <div class="form-group">
    <input  class="form-control" id="usuario" type="text" required v-model="usuarioField" placeholder="Seu login">
    </div>
 
    <div class="form-group">
    <input  class="form-control"  id="password"  required 
    v-model="passwordField" type="text" placeholder="Sua senha" >
    </div>

    <div class="form-group">
    <button type="submit" @click="Login" class="btn btn-primary mb-2 form-control">Enviar</button>
    </div>
  </div>
</div>
</form>
 
</template>

<script>
export default {
  name: 'Login',
   usuarioField: "",
  passwordField: "",
  data(){
    return{
    title: "Login",
   
   } },
  props: {
    msg: String
  },
  methods:{ 
    Login: function(){
        
      
 
 // const requestOptions = {
  //  method: "POST",
  //  headers: { "Content-Type": "application/json" },
  //  body: JSON.stringify({ 
 
  //    usuario: this.usuarioField.value,
    //  password: this.passwordField.value })
 // };
  //fetch("http://localhost:800/login", requestOptions)
 //   .then(res =>res.json())
  //.then(resData => console.log(resData))
 // .catch(erro => console.log(erro));
}
  }
  }

</script>


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
#background{
    background:  url("../assets/OCP.png") no-repeat ;
  background-size: contain;
  background-position: center;
  width: 100%;
  height: 100vh;
 
}
</style>


 



