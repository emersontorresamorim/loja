<?php
	session_start();
	
	function isUsuarioLogado() {
		return isset($_SESSION['usuario_logado']);
	}


	function getUsuarioLogado() {
		return $_SESSION["usuario_logado"];
	}


	function validarUsuario() {
		if (!isUsuarioLogado()) {
			$_SESSION['danger'] = "Você não tem acesso a esta página.";
			header("Location: index.php");
			die();
		}
	}


	function fazLogin($email) {
		$_SESSION['usuario_logado'] = $email;
	}


	function fazLogout() {
		session_destroy();
		session_start();
	}