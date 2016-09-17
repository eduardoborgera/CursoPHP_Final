<html>
<head>
	<title>Frutas</title>
</head>
<body>
	<h1>Frutas</h1>
	<ul>
	<?php require "array/frutas.php"; ?>

	<!-- : substitui chave -->
	<?php foreach ($resultado as $chave => $valor): ?>

		<!-- '< ?=' substitui '< ?php echo' -->
		<li>[<?= $chave ?>] => <?= $valor ?></li> 

	<!-- endif, endwhile, etc, substitui fecha chave } -->
	<?php endforeach ?>
	</ul>
</body>
</html>