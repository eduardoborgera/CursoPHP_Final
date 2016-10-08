<?php

require_once "core/settings.php";
require_once "core/db_mysql.php";

if(! isset($_SESSION)) session_start();

if(! isset($_SESSION['email'])){
	header("location: " . $URL_PATH . "login.php");
}

	$id_user = $_GET['id'];

	$mysql_query = mysqli_query($conn, "SELECT * FROM usuarios where id = $id_user");

	$user = mysqli_fetch_assoc($mysql_query);

	

	?>


<html>
<head>
	<?php require "bootstrap.php"; ?>
	<title>Alterar Usuario</title>
</head>
<body>
	<left>

	<div class="panel panel-warning" style="width:30%; margin: 2% auto;">
	 	<div class="panel panel-heading">
	 		Alterar usuario
	 	</div

	 	<div class="panel-body"> 
	 		<form method="POST" action="<?= $URL_PATH ?>core/alterar_cadastro.php?id=<?= $user['id'];?>">
	 			<!-- <form method="POST" action="<?= $URL_PATH ?>core/alterar_cadastro.php?id=<?= $user['id'];?>"> -->
	 			<!-- <input type="hidden" name="id" value="<?php echo $id_user?>"> -->
	 		  <div class="form-group">
			    <label for="exampleInputName">Nome</label>
			    <input type="text" name="nome" value="<?php echo $user['nome'];?>" class="form-control" id="exampleInputName" placeholder="Nome">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Endereço de e-mail</label>
			    <input type="email" name="email" value="<?php echo $user['email'];?>"  class="form-control" id="exampleInputEmail1" placeholder="E-mail">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" name="senha" value="<?php echo $user['senha'];?>"  class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Alterar</button>

			</form>
	 	</div>
 	</div>

	</left>

</body>
</html>