<html>
<head>
	<title>Usuarios Logados</title>
	<?php require "bootstrap.php"; ?>
	<?php require "array/usuarios.php"; ?>
</head>
<body>
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Login</th>
			<th>Ação</th>
		</thead>
		<tbody>
			<!-- EXEMPLO 1 	
			< ?php for ($i=0, $n = count($users); $i < $n; $i++): 

				$user = $users[$i];

			?>

				<tr>
					<td>< ?= $user['name'] ?></td>
					<td>< ?= $user['login'] ?></td> 
				</tr>

			< ?php endfor ?>
-->


			<?php foreach ($users as $u): ?>
			
				<tr>
					<td><?= $u['name'] ?></td>
					<td><?= $u['login'] ?></td> 
					<td>
						<button class="btn btn-primary btn-sm">editar</button>
						<button class="btn btn-danger btn-sm">excluir</button>
					</td>
				</tr>

			<?php endforeach ?>
			

			
		</tbody>
	</table>
</body>
</html>