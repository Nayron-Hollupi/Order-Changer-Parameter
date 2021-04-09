<template>

<div class="page-wrapper chiller-theme toggled">
<Menu />
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8">          
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="https://www.manutencaoemfoco.com.br/wp-content/uploads/2017/09/Periodicidade-da-Manuten%C3%A7%C3%A3o-Preventiva-1-570x300.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
          </div>     
        </div>
      </div>
    </div>
 <div class="container-fluid">
      
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="https://www.manutencaoemfoco.com.br/wp-content/uploads/2016/12/Figura-C.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
          </div>     
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="https://www.manutencaoemfoco.com.br/wp-content/uploads/2016/12/Figura-C.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
          </div>     
        </div>
      </div>
      
    </div>

  </main>

</div>

</template>








<script>
import Menu from '../components/Menu.vue'


export default{
    components:{
        Menu
    }
}

</script>




<style scoped >
body {
  font-size: 0.9rem;
}

.page-wrapper {
  height: 100vh;
}

.page-wrapper .theme {
  width: 40px;
  height: 40px;
  display: inline-block;
  border-radius: 4px;
  margin: 2px;
}


.page-wrapper.toggled .sidebar-wrapper {
  left: 0px;
}

@media screen and (min-width: 768px) {
  .page-wrapper.toggled .page-content {
    padding-left: 300px;
  }
}


.page-wrapper .page-content {
  display: inline-block;
  width: 100%;
  padding-left: 0px;
  padding-top: 20px;
}

.page-wrapper .page-content > div {
  padding: 20px 40px;
}

.page-wrapper .page-content {
  overflow-x: hidden;
}
</style>
