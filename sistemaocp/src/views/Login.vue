<template>
 <form    method="post"  @submit="Login">


<div class="container-box">
<aside class="box"></aside>
  <main class="box">
  <md-card >   
      <md-card-content style="padding: 80px;" >
          <div class="mb-3" style="text-align:center">
    <h1 >{{title}}</h1>
    </div>
    
          <div class="md-layout-item md-small-size-100 md-size-100">
            <md-field>
              <label>Digite o Usuario</label>
              <md-input v-model="usuario" label="Usuario" 
                ></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-100">
            <md-field>
              <label>Digitea a senha</label>
              <md-input v-model="password"     label="Password" 
                type="password"
               ></md-input>
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
  </main>
</div>
 



   </form>
</template>

<script>
import jwt from 'jsonwebtoken'
import axios from 'axios';
import Swal from 'sweetalert2'
export default {

  data(){
    return{
    title: "Login",


       usuario: '',
      password: '',
     
   } },
  props: {
  
  
  },
  
    
  methods:{ 
    Login: function(){
    axios.post("http://localhost:8000/login",{usuario:this.usuario, password:this.password})
   .then(res => {
     
     console.log(res.data);
 this.token = res.data; 
    if(this.token != false){
    jwt.sign({
            usuario: this.usuario,
            password: this.password,
            token: this.token
          }, 'jwtSecret', (err, token) => {
            window.localStorage.setItem('token', token)
            this.$router.push('/')
          })}if(this.token == false){
            Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Erro no Login, Favor realizar novamento.',
  showConfirmButton: false,
  timer: 2000
})
          }
   })

}
    
   
       }
    }

</script>


<style scoped >

.container-box {
  width: 100%;
  height: 100%;
/*   max-width: 700px; */
  margin: 0 auto;
  display: grid;
  gap: 0px;
  grid-template-rows: auto auto ;
  grid-template-areas:
    '  aside aside main'
  ;
}

.box {
  
      background-color: #ffffff;
}




aside {
  grid-area: aside;
 background:  url("../assets/OCP1.png") no-repeat ;
 background-size: contain;
  background-position: center;
  width: 100%;
   height: 100vh;
    background-color: #ffffff;
}

main {
  grid-area: main;
display: flex;
flex-direction: row;
text-align: center;
 font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #000000;
  margin-top: 0px ;
   width: 100%;
  

}


</style>


 



