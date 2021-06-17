<template>
  <!----  User Page -----> 
  <div class="content" >
       <!----------------------------------------Bread crumb---------------------------------------------------------->
      <header>
           <nav>
    <ol>
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>



      <!----------------------------------------Bread crumb from the user page---------------------------------------------------------->
      <li v-if="PageUsuario">
        <b >Usuarios</b>
      </li>



      <!----------------------------------------Bread crumb from the  user register page----------------------------------------------------------> 
         <li v-if="PageCadastro">
        <a @click="cadastro()">Usuarios</a>
      </li>
      <li v-if="PageCadastro">
        <b >Cadastrar usuario</b>
      </li>



            <!----------------------------------------Bread crumb from the  user edit page--------------------------------------------------------->
        <li v-if="PageEditar">
        <a @click="editarbread()" >Usuarios</a>
      </li>
      <li v-if="PageEditar">
        <b >Editar usuario</b>
      </li>
    </ol>
  </nav>
    </header>
      <br>

    <!----------------------------------------------------User preview page------------------------------------------------> 
    <div v-if="PageUsuario">
    <div class="md-layout">


        <!----------------------------------------------------View analysts------------------------------------------------> 
      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Analistas cadastrados</h4>
          </md-card-header>
          <md-card-content>
            <div table-header-color="green" >  <md-table  >
  
      <md-table-row slot="md-table-row"  v-for="(usuario,id) in analistas" :key="id"  > 
        <md-table-cell md-label="Registro" >{{usuario.registro}}</md-table-cell>
        <md-table-cell md-label="Usuario"  >{{usuario.usuario}}</md-table-cell>
        <md-table-cell md-label="email" >{{usuario.email}}</md-table-cell>
      
 <md-table-cell><md-button class="md-warning" @click="editar(usuario.id)" >Editar</md-button></md-table-cell>
<md-table-cell ><md-button class="md-danger" @click="Delete(usuario.id)">Excluir</md-button></md-table-cell>
 
  </md-table-row>
    </md-table></div>
             
          </md-card-content>
        </md-card>
      </div>


   <!----------------------------------------------------------View managers---------------------------------------------------> 
      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Gestores cadastrados</h4>
          </md-card-header>
          <md-card-content>
            <div table-header-color="green" >  <md-table  >
  
      <md-table-row slot="md-table-row"  v-for="(usuario,id) in gestores" :key="id"  > 
        <md-table-cell md-label="Registro" >{{usuario.registro}}</md-table-cell>
        <md-table-cell md-label="Usuario"  >{{usuario.usuario}}</md-table-cell>
        <md-table-cell md-label="email" >{{usuario.email}}</md-table-cell>
            
 <md-table-cell><md-button class="md-warning" @click="editar(usuario.id)" >Editar</md-button></md-table-cell>
 <md-table-cell ><md-button class="md-danger" @click="Delete(usuario.id)">Excluir</md-button></md-table-cell>
 
  </md-table-row>
    </md-table></div>  
          </md-card-content>
        </md-card>
      </div>

        <!-------------------------------------------------------View technicians------------------------------------------------> 
      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Tecnicos cadastrados</h4>
          </md-card-header>
          <md-card-content>
         <md-table >
      <md-table-row slot="md-table-row"  v-for="(usuario,id) in tecnicos" :key="id"  > 
        <md-table-cell md-label="Registro" >{{usuario.registro}}</md-table-cell>
        <md-table-cell md-label="Usuario"  >{{usuario.usuario}}</md-table-cell>
        <md-table-cell md-label="email" >{{usuario.email}}</md-table-cell>
 <md-table-cell><md-button class="md-warning" @click="editar(usuario.id)" >Editar</md-button></md-table-cell>
<md-table-cell ><md-button class="md-danger" @click="Delete(usuario.id)">Excluir</md-button></md-table-cell>
  </md-table-row>
    </md-table>
          </md-card-content>
        </md-card>
      </div>

     <div  class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
       
    
       <div class="d-grid gap-2 col-12 mx-auto">
  <md-button class="md-info" @click="cadastro()">Cadastrar novo Usuario</md-button>
</div>

  
      </div>

    </div>
    </div>





<!---------------------------------------------------------Edit users page --------------------------------->

    
  <div v-if="PageEditar">
    <form>
      
    <md-card>
      <md-card-header  data-background-color="green">
        <h4 class="title" style="text-align:center">Editar Usuario</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout" v-for="(editar,id) in EditarUsuarios" :key="id" >
          <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field >
              <label>{{editar.usuario}}</label>
              <md-input v-model="usuario" type="text"  >{{editar.usuario}}</md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field >
              <label>{{editar.email}}</label>
              <md-input v-model="email" type="email">{{editar.email}}</md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field >
              <label>{{editar.registro}}</label>
              <md-input v-model="registro" type="text">{{editar.registro}}</md-input>
            </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33" >
          
           <div class="md-layout-item">
        <md-field>
          <label>{{editar.Tipo}}</label>
          <md-select v-model="Tipo" name="Tipo" id="Tipo"  >

            <md-option value="Analista">Analista</md-option>
            <md-option value="Gestor">Gestor</md-option>
            <md-option value="Tecnico">Tecnico</md-option>
          </md-select>
        </md-field>
      </div>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field >
              <label>Digite a senha</label>
              <md-input v-model="password" type="text" >{{editar.password}}</md-input>
            </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33" >
               <md-button @click="atualizar(editar.id)" class="md-raised md-info">Atualizar</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>
  </form>
  </div>



<!-------------------------------------Register users page--------------------------------->


<div v-if="PageCadastro">
    <form>
     
    <md-card>
      <md-card-header  data-background-color="green">
        <h4 class="title" style="text-align:center">Cadastrar novo Usuario</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Digite o nome do Usuário</label>
              <md-input v-model="usuario" type="text"></md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Digite o Email</label>
              <md-input v-model="email" type="email"></md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Digite o Registro do Usuário</label>
              <md-input v-model="registro" type="text"></md-input>
            </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
           <div class="md-layout-item">
        <md-field>
          <md-select v-model="Tipo" name="Tipo" id="Tipo" placeholder="Selecione o tipo de Usuário">
            <md-option value="Analista">Analista</md-option>
            <md-option value="Gestor">Gestor</md-option>
            <md-option value="Tecnico">Tecnico</md-option>
          </md-select>
        </md-field>
      </div>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Digite a senha</label>
              <md-input v-model="password" type="text"></md-input>
            </md-field>
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
           <div class="md-layout-item md-small-size-100 md-size-33">
               <md-button @click="cadastrar()" class="md-raised md-info">Cadastrar</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>
     
  </form>
  </div>
  </div>
  
</template>



<script>
import axios from 'axios';
import Swal from 'sweetalert2'

export default {
  
  components: {
   
  },
   props:{
   
    
  },
    data() {
    return {
         usuario: null,
      registro: null,
      email: null,
       Tipo: null,
      password: null,
      EditarUsuarios: [],
      analistas: [],
      gestores: [],
      tecnicos: [],
PageUsuario: true,
PageEditar: false,
PageCadastro: false,
 
    }
  },

  created: function(){
if(this.PageUsuario == true){
  
 axios.get("http://localhost:8000/usuario/Analista" )
 .then(res => { 
   console.log(res.data);
   this.analistas = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/Gestor")
 .then(res => { 
   console.log(res.data);
   this.gestores = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/Tecnico")
 .then(res => { 
   console.log(res.data);
   this.tecnicos = res.data; 
 })

}

 },
 methods:{
      
 editar: function(id){
    
   this.PageUsuario = !this.PageUsuario;
   this.PageEditar =!this.PageEditar;
    
  axios.get("http://localhost:8000/usuario/mostrar/" + id)
 .then(res => { 
   console.log(res);
   this.EditarUsuarios= res.data; 
 })
    
 },
  editarbread: function(id){
   this.PageUsuario = !this.PageUsuario;
   this.PageEditar =!this.PageEditar;
  
     
   
 },
 cadastro: function(){
   this.PageUsuario = !this.PageUsuario;
   this.PageCadastro = !this.PageCadastro;
   
 },



 
 Delete: function(id){
 Swal.fire({
  title: 'Deseja deletar?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Deletar!'
}).then((result) => {
  if (result.isConfirmed) {
   axios.delete("http://localhost:8000/usuario/deletar/" + id)
.then(res => {
  console.log(res);
  this.delete = res.data;
axios.get("http://localhost:8000/usuario/Analista" )
 .then(res => { 
   console.log(res);
   this.analistas = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/Gestor")
 .then(res => { 
   console.log(res);
   this.gestores = res.data;  
 }),
  axios.get("http://localhost:8000/usuario/Tecnico")
 .then(res => { 
   console.log(res);
   this.tecnicos = res.data; 
 })
})

    Swal.fire(
      'Deletado!',
      'O usuario foi deletado com sucesso.',
      'success'
    )
  }
}) 
 },



 




 cadastrar: function(){
 
  axios.post( "http://localhost:8000/usuario/cadastrar",{usuario:this.usuario, email:this.email, registro:this.registro, Tipo:this.Tipo, password:this.password})
   .then(res => {
     console.log(res);
    this.usuarios = res.data;
     if(this.usuarios == true){
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Cadastro realizado com sucesso.',
  showConfirmButton: false,
  timer: 3000
   
})
  this.$router.push('/usuarios');
this.PageUsuario = !this.PageUsuario;
this.PageCadastro = !this.PageCadastro;

   }if(this.usuarios == false){
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Erro no cadastro, Favor realizar novamente.',
  showConfirmButton: false,
 timer: 3000
})
 

   }
   axios.get("http://localhost:8000/usuario/Analista" )
 .then(res => { 
   console.log(res);
   this.analistas = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/Gestor")
 .then(res => { 
   console.log(res);
   this.gestores = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/Tecnico")
 .then(res => { 
   console.log(res);
   this.tecnicos = res.data; 
 })

   })

    },


    atualizar: function(id){

    axios.put( "http://localhost:8000/usuario/" + id +"/atualizar",
    { usuario:this.usuario, email:this.email, registro:this.registro, Tipo:this.Tipo, password:this.password})
   .then(res => {
     console.log(res);
     this.atualizado = res.data;
      if(this.atualizado == true){
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Usuario atualizado com sucesso.',
  showConfirmButton: false,
  timer: 3000
   
})

 this.PageUsuario = !this.PageUsuario;
 this.PageEditar =!this.PageEditar;
  
   }else{
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Erro na atualização, Favor realizar novamento.',
  showConfirmButton: false,
  timer: 3000
})
   }
   axios.get("http://localhost:8000/usuario/Analista" )
 .then(res => { 
   console.log(res);
   this.analistas = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/Gestor")
 .then(res => { 
   console.log(res);
   this.gestores = res.data; 
 }),
  axios.get("http://localhost:8000/usuario/Tecnico")
 .then(res => { 
   console.log(res);
   this.tecnicos = res.data; 
 })

   })  }}

 };
</script>


<style scoped>
:root {
  background-color: #def;
  box-shadow: inset 0 0 7rem #fff, inset 0 0 3rem #fff;
  font: normal x-large/1 "Roboto Condensed", sans-serif;
  min-height: 100vh;
}

header {
  background-color: #000;
  color: #fff;
  font-size: .75rem;
  letter-spacing: .05em;
  text-transform: uppercase;
  margin: 0;
}

nav {
  display: table;
  overflow: hidden;
  width: 100%;
}

ol {
  display: table-row;
  list-style: none;
  text-align: center;
}

li {
  display: table-cell;
  vertical-align: middle;
  width: 33.33%;
}

a,
b {
  display: block;
  padding: 15px 0;
  position: relative;
  white-space: nowrap;
  
}

a::after {
  background-color: #000;
  border-radius: 0 0 0 48px;
  box-shadow: 3px -3px 0 3px #def;
  content: "";
  height: 48px;
  position: absolute;
  right: -24px;
  top: 0;
  transform: scale(.707) rotate(45deg);
  width: 48px;
  z-index: 1;
    color: #fff;
}

a,
a:link,
a:visited,
a:hover,
a:active,
a:focus {
  color: #fff;
  text-decoration: none;
}

a:hover,
a:hover::after {
  background-color: #3c3c3c;
  
}

b {
  background-color: #777;
  font: inherit;
}
</style>
