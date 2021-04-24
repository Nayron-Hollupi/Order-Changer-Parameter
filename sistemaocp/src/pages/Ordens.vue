<template>
  <div class="content">
         <header>
           <nav>
    <ol>
      <li>
        <a href="http://localhost:8080/#/dashboard">Dashboard</a>
      </li>
      <li>
        <b >Usuarios</b>
      </li>
      
    </ol>
  </nav>
    </header>
    <div class="md-layout">
      <div class="md-layout-item">
      <notifications></notifications>
      <md-card>
        <md-card-header data-background-color="green">
          <h4 class="title" style="text-align:center">Ordens</h4>
        </md-card-header>
        <md-card-content>
          <div class="md-layout">
            <div class="md-layout-item md-size-100">
              <div class="places-buttons text-center">
                 <sidebar-link to="ordens/abrir">
                <md-button class="md-success" >Abrir Ordem</md-button>
                </sidebar-link>
               <sidebar-link to="ordens/abertas">
               <md-button class="md-danger" >Ordens Abertas</md-button>
                </sidebar-link>
                 <sidebar-link to="ordens/Andamento">
                <md-button class="md-warning" >Ordens em andamento</md-button>
                </sidebar-link>
                 <sidebar-link to="ordens/Finalizadas">
             <md-button class="md-info" >Ordens Finalizadas</md-button>
                </sidebar-link>
              </div>
            </div>
          </div>
        </md-card-content>
      </md-card>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {

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
