<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-produto.php"); 
?>	
<?php 
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	if (array_key_exists('usado', $_POST)) {
		$usado = "true";	
	} else {
		$usado = "false";
	}
	

	if (atualizarProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { 
?>
		<p class="text-success">O Produto <?= $nome; ?>, no valor de <?= $preco; ?> foi atualizado com sucesso.</p>
<?php 
	} else { 
		$msg_erro = mysqli_error($conexao); 
?>
		<p class="text-danger">Erro! O Produto não foi atualizado - Motivo: <?= $msg_erro; ?></p>
<?php 
	} 
?>
<?php include("rodape.php"); ?>