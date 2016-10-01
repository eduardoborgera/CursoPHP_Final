<?php

require "settings.php";

// Conectando no banco de dados
$conn = mysqli_connect(
	$db_hostname,
	$db_usuario,
	$db_senha,
	$db_database
) or die("Nao foi possivel conectar no banco de dados");