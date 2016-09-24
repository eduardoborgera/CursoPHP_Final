<?php

if(isset($_GET["username"])){
	echo "Seja bem vindo, " . $_GET["username"];
}
else{
	echo "<div class='alert alert-danger'>";
	echo "Voce precisa especificar o 'username'";
	echo "</div>";	
}

?>
<html>
<head>
	<?php require "../aula_2/bootstrap.php"; ?>
	<title>Email | METHOD :: GET</title>
</head>
<body>
	<form method="GET" action="pagina_2.php">
		<div class="form-group">
			<label>Nome: </label>
			<input type="text" class="forms-control" name="username" />
		</div>

		<input type="submit" class="btn btn-default" value="Enviar" />
	</form>
</body>
</html>

