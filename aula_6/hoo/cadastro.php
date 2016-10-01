<?php

require_once "core/settings.php";

if(! isset($_SESSION)) session_start();

if(! isset($_SESSION['email'])){
	header("location: " . $URL_PATH . "login.php");
}

?>


<html>
<head>
	<?php require "bootstrap.php"; ?>
	<title>Cadastro de Usuarios</title>
</head>
<body>
	<left>

	<div class="panel panel-warning" style="width:30%; margin: 2% auto;">
	 	<div class="panel panel-heading">
	 		Cadastrar novo usuario
	 	</div>

	 	<div class="panel-body"> 
	 		<form method="POST" action="<?= $URL_PATH ?>core/cadastro.php">
	 		  <div class="form-group">
			    <label for="exampleInputName">Nome</label>
			    <input type="text" name="nome" class="form-control" id="exampleInputName" placeholder="Nome">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Endereço de e-mail</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Cadastrar</button>
			</form>
	 	</div>
 	</div>

	</left>

</body>
</html>