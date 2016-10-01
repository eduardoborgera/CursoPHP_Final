<?php

require "../core/db_mysql.php";

$query = mysqli_query($conn, "SELECT * FROM usuario");

//var_dump($query);

$resultado = mysqli_fetch_assoc($query);

//var_dump($resultado);

echo "Bem vindo, usuario " . $resultado['nome'];