<?php require "common.php" ?>

<html>
<head>
	<title>Pagina 1</title>
</head>
<body>
<?php 

	function soma_test($a, $b, $resultado){

		echo "a=$a, b=$b, resultado=$resultado<br>";
		return $resultado == soma($a, $b);

	}

	if(soma_test(1,2,3))
		echo "TESTE OK";
	else
		echo "TESTE FAIL";

?>
</body>
</html>