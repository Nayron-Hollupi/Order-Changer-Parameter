<template>
 <form   id="background"  method="post"  @submit.prevent="Login">

<div  class="container">
 <md-card>   
      <md-card-content  >
          <div class="mb-3" style="text-align:center">
    <h1 >{{title}}</h1>
    </div>
          <div class="md-layout-item md-small-size-100 md-size-100">
            <md-field>
              <label>Digite o Usuario</label>
              <md-input v-model="usuario" ></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-100">
            <md-field>
              <label>Digitea a senha</label>
              <md-input v-model="password" type="text"></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-size-100 text-right">
              <div class="d-grid gap-2">
  <button class="btn btn-primary" @click="Login()" type="button">Button</button>
              </div>
          </div>
        <br>
      </md-card-content>
    </md-card>
  </div>



   </form>
</template>

<script>
import axios from 'axios';
export default {

  data(){
    return{
    title: "Login",
   
   } },
  props: {
    msg: String
  },
  methods:{ 
    Login: function(){
    axios.post("http://localhost:8000/login",{usuario:this.usuario, password:this.password})
   .then(res => {
     console.log(res);
    
   })
    }
  }
}
</script>


<style scoped >
.container {
width: 500px;
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
  background:  url("../assets/OCP1.png")  ;
  background-size: auto;
  background-position: center;
  width: 100%;
  height: 100vh;
 background-color: #ffffff;
}
</style>


 



