<?php
	require_once("cabecalho.php");
	require_once("controle-acesso.php");

	validarUsuario();
?>
	<h1>Envie sua mensagem</h1>
	<form action="enviar-contato.php" method="post">
		<table class="table">
			<tr>
				<td>Nome:</td>
				<td><input class="form-control" type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input class="form-control" type="email" name="email">
			</tr>
			<tr>
				<td>Mensagem:</td>
				<td><textarea class="form-control" name="mensagem"></textarea></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Enviar</button>
			</tr>
		</table>
	</form>

<?php include("rodape.php"); ?>