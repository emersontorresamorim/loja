<?php
	require_once("banco-usuario.php");
	require_once("controle-acesso.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$usuario = buscarUsuario($conexao, $email, $senha);

	if ($usuario == null) {
		$_SESSION['danger'] = "Usuário ou Senha inválido.";
		header("Location: index.php");
	} else {
		fazLogin($usuario['email']);
		$_SESSION['success'] = "Logado com sucesso.";
		header("Location: index.php");
	}

	die();