<template>
 <form   id="background"  method="post"  @submit.prevent="Login">

<div  class="container">
  <div class ="box"> 
    <div class="mb-3">
    <h1>{{title}}</h1>
    </div>
    <div class="mb-3">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
 
    </div>
 <div class="mb-3">
   <input type="password" class="form-control" id="exampleInputPassword1">
</div>
 
    <div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Button</button>
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


<style scoped >
.container {
width: 100vw;
height: 80vh;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
text-align: center;
 font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #000000;
  margin-top: 0px;

}

.box {
  width: 300px;
height: 300px;

}
#background{
  background:  url("../assets/OCP1.png") no-repeat ;
  background-size: contain;
  background-position: center;
  width: 100%;
  height: 100vh;
 background-color: #c0bfbf;
}
</style>


 



