<?php

	$resultado = null;

	function fatorial($v){
		// 5 * 4 * 3 * 2 * 1 => 120 - return resultado final
		//TODO: Realizar o fatorial de um numero x

		$resultado_final = null;

		for($i = $v; $i >= 1; $i--){
			$resultado_final += $v * $v-1; 
		}

		return $resultado_final;

	}

	if(isset($_GET['valor'])){
		$resultado = fatorial($_GET['valor']);
	}

?>

<html>
<head>
	<?php require "../aula_2/bootstrap.php"; ?>
	<title>Fatorial</title>
</head>
<body>
	<form method="GET" action="pagina_6.php">
		<div class="form-group">
			<label>Valor: </label><br>
			<input type="text" class="forms-control" name="valor" />
		</div>
		<input type="submit" class="btn btn-default" value="Calcular" />
	</form>

	<div>

		
		<?php if($resultado != null): ?>
		 Resposta: <?= $resultado ?>
		<?php endif ?>

	</div>

</body>
</html>