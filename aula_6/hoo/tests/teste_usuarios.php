<?php

require "../core/db_mysql.php";

$query = mysqli_query($conn, "SELECT * FROM usuario");

//while($resultado = mysqli_fetch_assoc($query)){

//	var_dump($resultado);
//	echo "<hr>";

//}