<?php
	error_reporting(E_ALL ^ E_NOTICE);
	include("controle-mensagens.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Minha Loja</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/loja.css">
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Minha Loja</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li><a href="produto-formulario.php">Cadastrar Produto</a></li>
						<li><a href="produto-lista">Listar Produtos</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="principal">
<?php 
	exibirMensagem("success");
	exibirMensagem("danger"); 
?>
