<template>
  <div id="app">

    <div  v-for="usuario in analistas" :key="usuario.id">
<h1> {{usuario.usuario}}</h1>
<h1>{{usuario.registro}}</h1>
<h1> {{usuario.email}}</h1>

                </div>

  </div>
</template>

<script>
import axios from 'axios';


export default {
 name: 'App',
    data() {
    return {
      analistas: null
    }
  },
  created: function(){
 axios.get("http://localhost:8000/usuario/1")
 .then(res => { 
   console.log(res);
   this.analistas = res;

 })

 }
   
 }

</script>
