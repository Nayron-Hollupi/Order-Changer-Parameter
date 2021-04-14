<template>
 <form  id="background"  method="post"  @submit.prevent="Login">

<div class="container">
  <div class ="box"> 
    <div class="form-group">
    <h1>{{title}}</h1>
    </div>
    <div class="form-group">
      <input type="text" class="email input" name="email" placeholder="Username" >
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

  
     <div class="shape shape1"></div>
     <div class="shape shape2"></div>
     <div class="login login__form">
       <div class="container cont__login">
        
        
        <input type="submit" class="btn btn__login">
       </div>           
         
     </div>
      <div class="register login__form">
        <div class="container">
          <input type="text" class="email input" name="email" placeholder="Email Address" >
          <input type="password" class="password input" name="password" placeholder = "Password">
          <input type="password" class="password pwtwo input" name="pwrepeat" placeholder = "Repeat Password">
          <input type="submit" class="btn btn__register">
        </div>
     </div>
     
 <div class="cta">
       <h2 class="cta__heading">Login to your account!</h2>
       <p class="cta__text">to get full access to our awesome product!</p>
       
        <button class="btn cta__btn"><p class="cta__btn--text1">Dont have an Account?</p> <p class="cta__btn--text2">Click Here to register!</p></button>
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


 



