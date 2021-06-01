<template>
  <div class="content">
    <header>
           <nav>
    <ol>
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>
      <li v-if="PageMaquina">
        <b >Máquinas</b>
      </li>
       

         <li v-if="PageCadastro">
        <a @click="cadastro()">Maquinas</a>
      </li>
      <li v-if="PageCadastro">
        <b >Cadastrar máquinas</b>
      </li>

        <li v-if="PageEditar">
        <a @click="editarbread()" >Máquinas</a>
      </li>
      <li v-if="PageEditar">
        <b >Editar máquina</b>
      </li>
    </ol>
  </nav>
    </header>
     <div v-if="PageMaquina">
    <div class="md-layout">

<!---------------------------------------Page Máquinas ----------------------------------------->
      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100">
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title" style="text-align:center">Lista de Maquinas cadastradas</h4>
          </md-card-header>
          <md-card-content>
            <div table-header-color="green" >  <md-table >
      <md-table-row slot="md-table-row"  v-for="(maquina,id) in maquinas" :key="id"  > 
        <md-table-cell md-label="Setor" >{{maquina.Setor}}</md-table-cell>
        <md-table-cell md-label="Tag_Maquina"  >{{maquina.Tag_Maquina}}</md-table-cell>
 <md-table-cell><md-button class="md-warning" @click="editar(maquina.id)" >Editar</md-button></md-table-cell>
<md-table-cell ><md-button class="md-danger" @click="Delete(maquina.id)">Excluir</md-button></md-table-cell>

  </md-table-row>
    </md-table></div>
          </md-card-content>
        </md-card>
      </div>


 <div  class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100" >
       
    
       <div class="d-grid gap-2 col-12 mx-auto">
  <md-button class="md-info" @click="cadastro()">Cadastrar nova Maquina</md-button>
</div>

      </div>
    
    </div>
  
     </div>

  <!----------------------Page Cadastrar Maquina --------------------------->
    <div v-if="PageCadastro">
   <form>
    
    <md-card>
      <md-card-header  data-background-color="green">
        <h4 class="title" style="text-align:center">Cadastrar Maquina</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Digite o Setor</label>
              <md-input v-model="Setor" type="text"></md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Digite o Tag e Maquina</label>
              <md-input v-model="Tag_Maquina" type="text"></md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
         
         
         
           <div class="md-layout-item md-small-size-100 md-size-33">
               <md-button  @click="cadastrar()" class="md-raised md-info">Cadastrar</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>
  </form>
</div> 
 


  <!-------------------------Page Editar Máquina------------------------> 
<div v-if="PageEditar">
 <form><br>
   
    <md-card>
      <md-card-header  data-background-color="green">
        <h4 class="title" style="text-align:center">Editar Maquina</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field v-for="(editar,id) in EditarMaquina" :key="id">
              <label>{{editar.Setor}}</label>
              <md-input v-model="Setor" type="text"></md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field v-for="(editar,id) in EditarMaquina" :key="id">
              <label>{{editar.Tag_Maquina}}</label>
              <md-input v-model="Tag_Maquina" type="text"></md-input>
            </md-field>
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
            <div class="md-layout-item md-small-size-100 md-size-33">
           
          </div>
        
           <div class="md-layout-item md-small-size-100 md-size-33" v-for="(editar,id) in EditarMaquina" :key="id">
               <md-button  @click="atualizar(editar.id)" class="md-raised md-info">Atualizar</md-button>
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
  data(){
    return{
      Setor: null,
      Tag_Maquina: null,
      maquinas: [],
      EditarMaquina: [],
      PageMaquina: true,
      PageEditar: false,
      PageCadastro: false,
    }
  },
  created: function(){
    axios.get("http://localhost:8000/maquinas")
    .then(res => {
      console.log(res);
      this.maquinas = res.data;
    })
  },
   methods:{


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
   axios.delete("http://localhost:8000/maquinas/deletar/" + id)
.then(res => {
  console.log(res);
   axios.get("http://localhost:8000/maquinas")
    .then(res => {
      console.log(res);
      this.maquinas = res.data;
    })
       axios.get("http://localhost:8000/maquinas")
    .then(res => {
      console.log(res);
      this.maquinas = res.data;
    })
})

    Swal.fire(
      'Deletado!',
      'A maquina foi deletada com sucesso.',
      'success'
    )
  }
}) 

},




cadastro: function(){
   this.PageMaquina = !this.PageMaquina;
   this.PageCadastro =!this.PageCadastro;
 },


 cadastrar: function(){
    axios.post( "http://localhost:8000/maquinas/cadastrar",{Setor:this.Setor, Tag_Maquina:this.Tag_Maquina })
   .then(res => {
     console.log(res);
     this.maquina = res.data;

         if(this.maquina == true){
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Cadastro realizado com sucesso.',
  showConfirmButton: false,
  timer: 2000
   
})
 
   this.PageMaquina = !this.PageMaquina;
   this.PageCadastro =!this.PageCadastro;

   }if(this.maquina == false){
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Erro no cadastro, Favor realizar novamento.',
  showConfirmButton: false,
  timer: 2000
})
 

   }
      axios.get("http://localhost:8000/maquinas")
    .then(res => {
      console.log(res);
      this.maquinas = res.data;
    })
   })
    },




 editar: function(id){
   this.PageMaquina = !this.PageMaquina;
   this.PageEditar =!this.PageEditar;
    
  axios.get("http://localhost:8000/maquinas/mostrar/" + id)
 .then(res => { 
   console.log(res);
   this.EditarMaquina= res.data; 
 })
   
 },
 editarbread: function(id){
   this.PageMaquina = !this.PageMaquina;
   this.PageEditar =!this.PageEditar;
    

   
 },
  atualizar: function(id){

    axios.put( "http://localhost:8000/maquinas/" + id +"/atualizar",{Setor:this.Setor, Tag_Maquina:this.Tag_Maquina })
   .then(res => {
     console.log(res);
     this.atualizado = res.data;

       if(this.atualizado == true){
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Maquina atualizada com sucesso.',
  showConfirmButton: false,
  timer: 2000
   
})

 this.PageMaquina = !this.PageMaquina;
   this.PageEditar =!this.PageEditar;
  
   }else{
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Erro na atualização, Favor realizar novamento.',
  showConfirmButton: false,
  timer: 2000
})
   }
     axios.get("http://localhost:8000/maquinas")
    .then(res => {
      console.log(res);
      this.maquinas = res.data;
    })
   }) 
   
   }
}


}
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
