<?php

//Usuario Hard Coder
$user = array(
	"email" => "luiz.reis@4linux.com.br",
	"senha" => "123",
	"nome"  => "Luiz Fernando"
	);


//Campos obrigatorios de login
$requires = array('email', 'senha');

//Validar os campos do $_POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	foreach ($requires as $e) {
		if(! array_key_exists($e, $_POST)){
			header("location: pagina_5.php?error=missing_field");
		}

		if(empty($_POST[$e])){
			header("location: pagina_5.php?error=missing_field");
		}

	}

	//Atribuir as variaveis de login
	$login = $_POST['email'];
	$senha = $_POST['senha'];

	//Comparar Login e Senha
	if($login == $user['email'] && $senha == $user['senha']){

		if(! isset($_SESSION)) session_start();

		//definir os dados persistindo entre as paginas
		$_SESSION['email'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome']  = $user['nome'];


		header("location: index.php");
	}
	else{
		header("location: pagina_5.php?error=invalid_login");
	}


}
else{
	header("location: pagina_5.php");
}