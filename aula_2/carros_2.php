<html>
<head>
	<title>Meus Carros 2</title>
</head>
<body>
	<h1>
		<table border="2">
			<thead>
				<th>Coluna 1</th>
				<th>Coluna 2</th>
			</thead>
			<tbody>
				<?php 
					require "array/dono_carros.php";
					require "array/carros_db.php";

					//for($i = 0; $i <= count($array); $i++){
					//	echo "$array[$i] <br>";
					//}

					//foreach ($array as $chave) {
					//	echo "$chave <br>";
					//}

					foreach ($array as $chave => $valor) {
						echo "$chave ==> $valor <br>";
					}

					echo "<br>";

					foreach ($carros as $carro) {
						echo "$carro <br>";
					}

					//Formata PHP
					//echo '<pre>'; 

					//Varre Array
					//var_dump($array);	

				?>
			</tbody>
		</table>
	</h1>
</body>
</html>