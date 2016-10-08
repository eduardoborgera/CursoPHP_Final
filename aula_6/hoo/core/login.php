<?php


require "settings.php";

/*//Usuario Hard Coder
$user = array(
	"email" => "luiz.reis@4linux.com.br",
	"senha" => "123",
	"nome"  => "Luiz Fernando"
	);*/

require_once "db_mysql.php";

// Definir as variaveis do formulario



/*//Campos obrigatorios de login
$requires = array('email', 'senha');*/

//Validar os campos do $_POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	  $email = htmlspecialchars($_POST['email']);
	$senha = htmlspecialchars($_POST['senha']);

	// Definir senha segura
	$sec_senha = sha1('s3gur@' . $senha);


	// Criacao do QUERY
	$sql = "SELECT * FROM usuarios WHERE email='%s'AND senha='%s'";

	 $query = sprintf($sql,$email, $sec_senha);

	// Execultar comando
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)== 0){

		header("location:  " . $URL_PATH ."login.php?error=invalid_login");
	} else {

		if(! isset($_SESSION)) session_start();

		//definir os dados persistindo entre as paginas
		 $_SESSION['email'] = $email; 
		$_SESSION['senha'] = $senha;
		

		header("location: " . $URL_PATH ."index.php");
	}
}
	/*

	$user = mysqli_fetch_assoc($query);


	//Atribuir as variaveis de login
	$login = $_POST['email'];
	$senha = $_POST['senha'];

	//Comparar Login e Senha
	if($login == $user['email'] && $senha == $user['senha']){

		if(! isset($_SESSION)) session_start();

		//definir os dados persistindo entre as paginas
		$_SESSION['email'] = $login;
		$_SESSION['senha'] = $senha;
		

		header("location: " . $URL_PATH ."index.php");
	}
	else{
		header("location:  " . $URL_PATH ."login.php?error=invalid_login");
	}


}
else{
	header("location:  " . $URL_PATH ."login.php");
}*/