<?php 

if(! isset($_SESSION)) session_start();

if(! isset($_SESSION['email'])){
	header("location: pagina_5.php");
}

?>
<html>
<head>
	<?php require "../aula_2/bootstrap.php"; ?>
	<title>Bem Vindo <?= $_SESSION['nome'] ?>| Meu Site.com</title>
</head>
<body>
	<center>
		<h1>Meu Site</h1>
		<table class="table table-hover table-striped">
			<thead>
				<th>Logado</th>
				<th>Senha</th>
			</thead>

			<tbody>
				<tr>
					<td><?= $_SESSION['email']; ?></td>
					<td><?= $_SESSION['senha']; ?></td>
				</tr>

		</table>
		<a class="btn btn-danger" href="logout.php" >Sair</a>
	</center>
</body>
</html>