<?php
	include("conectar-db.php"); 
	include("banco-usuario.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$usuario = buscarUsuario($conexao, $email, $senha);

	if ($usuario == null) {
		header("Location: index.php?login=0");
	} else {
		setcookie("usuario_logado", $usuario['email'], time() + 60);
		header("Location: index.php?login=1");
	}

	die();