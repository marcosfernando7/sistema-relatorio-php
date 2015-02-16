<?php 

	require "conexao.php";

	$sql = "INSERT into clientes (nome, cidade, telefone)
			values(:nome, :cidade, :telefone)";

try {
	
	$dados = array(
		'nome' => $_POST['nome'],
		'cidade' => $_POST['cidade'],
		'telefone' => $_POST['telefone']
		);

	$inserir = $conexao->prepare($sql);
	$inserir->execute($dados);

	echo "ok";

} catch (Exception $e) {
 echo "Erro: " . $e->getMessage();	
}	

 ?>