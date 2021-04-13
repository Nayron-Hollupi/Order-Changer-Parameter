<template>

<div class="page-wrapper chiller-theme toggled">
<Menu />
 <form  id="background"  method="post" >
<div class="container">
  <div class ="box"> 
    <div class="form-group">
    <h1>{{title}}</h1>
    </div>
    <div class="form-group">
    <input  class="form-control" id="Usuario" type="text" required v-model="UsuarioField" placeholder="Digite o nome do usuario">
    </div>
 
    <div class="form-group">
    <select class="custom-select mr-sm-2" id="nivel" required >
        <option    selected>Escolher o nivel de acesso</option>
        <option value="1">Analista</option>
        <option value="2">Gestor</option>
        <option value="3">Tecnico</option>
      </select>
    </div>
    <div class="form-group">
    <input  class="form-control"  id="password"  required 
    v-model="SenhaField" type="text" placeholder="Digite a senha " >
    </div>
    <div class="form-group">
    <button type="submit" @click="Cadastrar" class="btn btn-primary mb-2 form-control">Cadastrar</button>
    </div>
  </div>
</div>
</form>
</div>

</template>

<script>
import Menu from '../components/Menu.vue'


export default{
    components:{
        Menu
       
    }, data(){
    return{
    title: "Cadastrar Usuarios",
   
   } }
}

</script>



<style scoped >
.container {
width: 400px;
height: 90vh;
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
    margin-right: 300px; 

}
.box {
width: 400px;
height: 400px;

}
#background{
    background:  url("../assets/OCP.png") no-repeat ;
  background-size: contain;
  background-position: right;
  width: 95%;
  height: 100vh;
 
}
</style>
