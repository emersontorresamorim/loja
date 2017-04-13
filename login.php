<?php
	include("conectar-db.php"); 
	include("banco-usuario.php");
	include("controle-acesso.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$usuario = buscarUsuario($conexao, $email, $senha);

	if ($usuario == null) {
		header("Location: index.php?login=0");
	} else {
		fazLogin($usuario['email']);
		header("Location: index.php?login=1");
	}

	die();