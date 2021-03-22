<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="ocp.css">
  <script src="ocp.js"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>



<div class = "background">
<form id="app" @submit="checkForm" action="/Login.php" method="post">
<div class="container">
  <div class ="box">
    
    <div class="form-group">
    <h1>Login</h1>
    </div>
    <div class="form-group">
    <input id="name" v-model="name" class="form-control"  type="text"  placeholder="Seu login">
    </div>
 
    <div class="form-group">
    <input id="password" v-model="password" class="form-control"  type="text" placeholder="Sua senha" >
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary mb-2 form-control">Enviar</button>
    </div>
  </div>
</div>
</form>
</div>
</body>
</html>