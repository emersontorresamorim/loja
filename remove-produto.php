<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-produto.php"); 
?>
<?php
	$id = $_GET['id'];
	removerProduto($conexao, $id);
	header("Location: produto-lista.php?removido=true");
	die();
?>