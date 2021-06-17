<template>
  <md-card>
      <md-card-header  data-background-color="green">
        <h2 class="title" style="text-align:center">Manual do usuario </h2>
      </md-card-header>

      <md-card-content>
        <div class="md-layout ">
         <!-------------------------Splash screen---------------------------------------->
          <div class="md-layout-item md-small-size-100 md-size-100" > 
             <md-field >
             <h3 class="text" > 1.	Tela de Apresentação:  </h3>
        </md-field>
         <div  class="home"> </div>
         
             <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" > Ao entrar no link do sistema OCP, você é direcionado a nossa tela de apresentação contendo o nosso logo, nesta tela 
     basta realizar um click em qualquer parte da tela para ser direcionado a tela de Login. </h4>
             </div>
          
    </div>


      <!-------------------------Login screen---------------------------------------->   
          <div class="md-layout-item md-small-size-100 md-size-100" > 
             <md-field > 
             <h3 class="text" > 2.	Tela de Login: </h3>
        </md-field>
         <div  class="login"> </div>
         
             <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" >A Tela de Login para entrar apenas usuários cadastrados no sistema, 
        inserir o usuário e senha de cadastro e clicar em próximo. Caso não possua cadastro, solicitar um HelpDesk com a equipe de TI para cadastro imediato.  </h4>
             </div>
          
    </div>


         <!-------------------------Dashboard screen---------------------------------------->   
          <div class="md-layout-item md-small-size-100 md-size-100" > 
             <md-field > 
             <h3 class="text" >3.	Tela Inicial do Sistema (Dashboard). </h3>
        </md-field>
         <div  class="dashboard"> </div>
         
             <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" >	Ao adentrar no sistema, você irá se deparar com alguns gráficos que contém dados das manutenções realizadas durante a semana/mês/ano.
         Com esta informação pode-se retirar dados de equipamentos que tem maior frequência de chamados para análise de manutenções corretivas.   A esquerda,
          temos o menu do sistema aonde o usuário pode percorrer entre as telas de Dashboard, usuários, maquinas, ordens, e no canto inferior temos a opção de sair. </h4>
             </div>
          
    </div>


           <!-------------------------User screen---------------------------------------->   
          <div class="md-layout-item md-small-size-100 md-size-100" > 
             <md-field > 
             <h3 class="text" >4.	Tela Inicial do Sistema (Usuarios). </h3>
        </md-field>
         <div  class="user"> </div>
         
             <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" >Na tela de Usuários, você poderá acompanhar os usuários cadastrados com seu ID,
         nome e e-mail, nesta tela, os coordenadores do sistema e gestores da área tem a liberdade de editar 
         os dados dos usuários e/ou excluir o Login caso o colaborador não pertença mais a quadro de funcionários.</h4>  </div>
       
       <br><br>
         <div  class="createuser"> </div> 
                        <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" >Caso clique em cadastrar novo usuario, é direcionado a tela e cadastrar de usuário 
        aonde deve ser preenchido todos os dados para o do cadastro do usuário.</h4>  </div>
      
    <br><br>
   <div  class="edituser"> </div> 
                   <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" >Caso clique em editar, é direcionado a tela e edição de usuário 
        aonde deve ser preenchido só os dados desejavel para a alteração do cadastro do usuário.</h4>  </div>
      
    </div>

  
    <!-------------------------Machine screen---------------------------------------->   
          <div class="md-layout-item md-small-size-100 md-size-100" > 
             <md-field > 
             <h3 class="text" >5.	Tela Inicial do Sistema (Maquinas). </h3>
        </md-field>
         <div  class="machine"> </div>
         
             <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" >Na tela de Maquinas, você poderá acompanhar os Maquinas cadastrados ,
         Setor Tag e Maquina, nesta tela, os analistas do sistema tem liberdade de editar 
         os dados dos Maquinas  e/ou excluir.</h4>  </div>
       
       <br><br>
         <div  class="createmachine"> </div> 
                        <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" >Caso clique em cadastrar nova maquina, é direcionado a tela e cadastrar de usuário 
        aonde deve ser preenchido todos os dados para o do cadastro do usuário.</h4>  </div>
      
    <br><br>
   <div  class="editmachine"> </div> 
                   <div   class="md-layout-item md-medium-size-100 md-size-100 " > 
      <h4 class="text" >Caso clique em editar, é direcionado a tela e edição de usuário 
        aonde deve ser preenchido só os dados desejavel para a alteração do cadastro do usuário.</h4>  </div>
      
    </div>


        </div>
    <div>

  </div>
      </md-card-content>
         
    </md-card>
    
</template>

<script>

export default {

  data(){
    return{
   

  
     
   } },
  props: {
  
  
  },
  
   
   
       }
   

</script>


<style scoped >


.home{
 width: 100%;
  height: 35vh;
  background: url("../assets/Homeimg.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
 /* background-size: 50%;*/
}
.login{
 width: 100%;
  height: 50vh;
  background: url("../assets/login.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
  background-size: 60%;
}
.dashboard{
 width: 100%;
  height: 50vh;
  background: url("../assets/dashboard.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
  background-size: 60%;
}

.user{
 width: 100%;
  height: 50vh;
  background: url("../assets/user.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
  background-size: 60%;
}

.createuser{
 width: 100%;
  height: 50vh;
  background: url("../assets/createuser.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
  background-size: 60%;
}
.edituser{
 width: 100%;
  height: 50vh;
  background: url("../assets/edituser.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
  background-size: 60%;
}

.machine{
 width: 100%;
  height: 50vh;
  background: url("../assets/machine.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
  background-size: 60%;
}
.createmachine{
 width: 100%;
  height: 50vh;
  background: url("../assets/createmachine.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
  background-size: 60%;
}
.editmachine{
 width: 100%;
  height: 50vh;
  background: url("../assets/editmachine.png") no-repeat bottom center scroll;
  background-position: 50% 0%;
  background-size: 60%;
}
 .text {
    margin-left: auto;
  margin-right: auto;
  }
</style>


 



