<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-produto.php"); 
?>	
<?php 
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	if (gravarProduto($conexao, $nome, $preco)) { 
?>
		<p class="text-success">O Produto <?= $nome; ?>, no valor de <?= $preco; ?> adicionado com sucesso.</p>
<?php 
	} else { 
		$msg_erro = mysqli_error($conexao); 
?>
		<p class="text-danger">Erro! O Produto não foi adicionado - Motivo: <?= $msg_erro; ?></p>
<?php 
	} 
?>
<?php include("rodape.php"); ?>