<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-produto.php"); 
	include("controle-acesso.php");

	validarUsuario();
?>
<?php
	$id = $_POST['id'];
	removerProduto($conexao, $id);
	header("Location: produto-lista.php?removido=true");
	die();