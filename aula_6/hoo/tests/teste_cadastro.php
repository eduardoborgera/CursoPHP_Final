<?php

require "../core/db_mysql.php";

// Cadastro quando a requisicao for POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	// Recupera dados do formulario	
	$nome  = htmlspecialchars($_POST['nome']);
	$email = htmlspecialchars($_POST['email']);
	$senha = htmlspecialchars($_POST['senha']);

	// Mostra a QUERY do banco de dados
	// Preparament Statement
	$string = "INSERT INTO usuario (nome, email, senha) VALUES ('%s', '%s', '%s')";
	$sql = sprintf($string, $nome, $email, $senha);

	$result = mysqli_query($conn, $sql);

	if($result){
		echo "Cadastro realizado com sucesso!";
	}
	else{
		echo "Nao foi possivel realizar o cadastro: " . $conn->error;
	}


}

?>

<html>
<head>
<title>Teste de Cadastro</title>
</head>
<body>
	<form method ="POST" action="teste_cadastro.php" >
		<input type="text" name="nome" placeholder="Nome"><br>
		<input type="text" name="email" placeholder="Email"><br>
		<input type="password" name= "senha" placeholder="Senha"><br>
		<input type="submit" value= "Cadastrar">
	</form>
</body>
</html>