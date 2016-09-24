<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!isset($_POST['to']) || empty($_POST['to'])){
			echo "<script>alert('Por favor, informe o campo to')</script>";
		}

		if(!isset($_POST['body']) || empty($_POST['body'])){
			echo "<script>alert('Por favor, informe o campo body')</script>";
		}

		mail($_POST['to'], 'Teste', $_POST['body']);
		echo "<div class='alert bg-success'>";
		echo "Email enviado com sucesso";
		echo "</div>";
		
	}

?>
<html>
<head>
	<?php require "../aula_2/bootstrap.php"; ?>
	<title>Email | METHOD :: GET</title>
</head>
<body>
	<form method="POST" action="pagina_4.php">
		<div class="form-group">
			<label>To: </label><br>
			<input type="text" class="forms-control" name="to" />
		</div>


		<div class="form-group">
			<label>Corpo: </label><br>
			<textarea class="form-control" name="body" rows="3"></textarea>
		</div>

		<input type="submit" class="btn btn-default" value="Enviar" />
	</form>
</body>
</html>

