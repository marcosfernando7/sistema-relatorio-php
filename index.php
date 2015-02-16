<!doctype>
<html>
<head>
	<meta charset="utf-8">
	<title>Clientes</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>
	<div class="container">

		<div class="jumbotron">
			<h1>Adicionar Cliente</h1>
		</div>

		<form action="inserir.php" method="post">
			
			<div class="col-md-12">
				<p><label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control">
				</p>
			</div>

			<div class="col-md-6">
				<p><label for="cidade">Cidade</label>
					<input type="text" name="cidade" id="cidade" class="form-control">
				</p>
			</div>

			<div class="col-md-6">
				<p><label for="telefone">Telefone</label>
					<input type="text" name="telefone" id="telefone" class="form-control">
				</p>
			</div>

			<div class="col-md-12">
				<p>
					<input type="submit" class="btn btn-success" value="Cadastrar Cliente">
				</p>
			</div>


		</form>

			


	</div>
</body>
</html>