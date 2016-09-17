<html>
<head>
	<title>Meus Carros</title>
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
					require "array/carros_db.php";
					for ($i = 0; $i < count($carros); $i++) { 
						echo "<tr>";
						echo "<td>{$i}</td>";
						echo "<td>{$carros[$i]}</td>";
						echo "</tr>";
				 } ?>
			</tbody>
		</table>
	</h1>
</body>
</html>