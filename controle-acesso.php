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
			header("Location: index.php?falhaSeguranca=true");
			die();
		}
	}


	function fazLogin($email) {
		$_SESSION['usuario_logado'] = $email;
	}


	function fazLogout() {
		session_destroy();
	}