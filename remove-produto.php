<?php 
	require_once("cabecalho.php");
	require_once("banco-produto.php"); 
	require_once("controle-acesso.php");

	validarUsuario();
?>
<?php
	$id = $_POST['id'];
	removerProduto($conexao, $id);
	$_SESSION['success'] = "Produto removido com sucesso.";
	header("Location: produto-lista.php?removido=true");
	die();