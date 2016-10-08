<?php

require_once "settings.php";
require_once "db_mysql.php";

if(! isset($_SESSION)) session_start();

if(! isset($_SESSION['email'])){
	header("location: " . $URL_PATH . "login.php");
}

// Recuperar os dados do usuario
$id  = htmlspecialchars($_GET['id']);

// Construir a consulta
$sql = "DELETE FROM usuarios WHERE id = '$id'";

// Moldar Query do banco com o valor
$query = sprintf($sql, $id);

// Validacao da Consulta
if(mysqli_query($conn, $query)){
	header("Location: " . $URL_PATH . "index.php");
}
else{
	echo "Error ao tentar deletar usuario: " . $conn->error;
}