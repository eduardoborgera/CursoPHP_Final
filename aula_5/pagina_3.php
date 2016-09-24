<?php

if(isset($_GET['id'])){
	echo "Voce esta acessando a pagina {$_GET['id']} <br><br>";
}

$paginas = array(1,2,3,4,5,6);

?>
<html>
<head>
	<?php require "../aula_2/bootstrap.php"; ?>
	<title>Paginacao | METHOD :: GET</title>
</head>
<body>
	<?php foreach($paginas as $pagina): ?>
		<ul class="pagination">
			<li><a href="pagina_3.php?id=<?= $pagina ?>"><?= $pagina ?></a></li>
        </ul>
	<?php endforeach ?>
</body>
</html>

