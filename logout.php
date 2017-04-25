<?php
	require_once("controle-acesso.php"); 
	fazLogout();
	$_SESSION['success'] = "Usuário deslogado com sucesso.";
	header("Location: index.php");
	die();