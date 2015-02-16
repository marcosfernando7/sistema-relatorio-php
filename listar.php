<?php 
	require "conexao.php";

	$sql = "SELECT id_cliente, nome from clientes";
?>
<!doctype>
<html>
<head>
	<meta charset="utf-8">
	<title>Todos Clientes</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
	<div class="container">

		<div class="jumbotron">
			<h1>Todos Clientes</h1>
		</div>

		<table class="table table-striped">
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Relatório</th>
			</tr>

			<?php foreach ($conexao->query($sql) as $listar) : ?>
				<tr>
					<td><?php echo $listar['id_cliente']; ?></td>
					<td><?php echo $listar['nome']; ?></td>
					<td><a href="relatorio.php?id=<?php echo $listar['id_cliente']; ?>" class="btn btn-primary">Relatório</a></td>
				</tr>
			<?php endforeach; ?>



		</table>



	</div>
</body>
</html>