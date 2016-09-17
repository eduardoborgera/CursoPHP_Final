<html>
<head>
	<title>Minha Primeira Pagina</title>
</head>
<body>
	<h1>
		<?php echo "Seja bem vindo"; ?>	
		<table border="2">
			<thead>
				<th>Coluna 1</th>
				<th>Coluna 2</th>
			</thead>
			<tbody>
				<?php 
					for ($i = 0; $i < 10; $i++) { 
						echo "<tr>";
						echo "<td>Coluna 1.{$i}</td>";
						echo "<td>Coluna 2.{$i}</td>";
						echo "</tr>";
				 } ?>
			</tbody>
		</table>
	</h1>
</body>
</html>