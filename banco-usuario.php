<?php
	require_once("conectar-db.php");
	
	function buscarUsuario($conexao, $email, $senha) {
		$senhaMd5 = md5($senha);
		$email = mysqli_real_escape_string($conexao, $email);
		$query = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senhaMd5}'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}