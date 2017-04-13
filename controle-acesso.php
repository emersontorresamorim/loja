<?php
	
	function isUsuarioLogado() {
		return isset($_COOKIE['usuario_logado']);
	}


	function getUsuarioLogado() {
		return $_COOKIE["usuario_logado"];
	}


	function validarUsuario() {
		if (!isUsuarioLogado()) {
			header("Location: index.php?falhaSeguranca=true");
			die();
		}
	}


	function fazLogin($email) {
		setcookie("usuario_logado", $email, time() + 60);
	}