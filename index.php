<?php 
	include("cabecalho.php");
	include("controle-acesso.php"); 
?>
	<h1>Bem vindo ao Controle de Produtos!</h1>

	<?php
		if (isset($_GET['login']) && $_GET['login'] == true) {
	?>
			<p class="alert-success">Logado com sucesso.</p>
	<?php
		} else if (isset($_GET['login']) && $_GET['login'] == false) {
	?>
			<p class="alert-danger">Usuário ou Senha inválida.</p>
	<?php
		}
	?>

	<?php
		if (isset($_GET['falhaSeguranca']) && $_GET['falhaSeguranca'] == true) {
	?>
			<p class="alert-danger">Você não tem acesso a esta página.</p>
	<?php
		}
	?>

	<?php
		if (isUsuarioLogado()) {
	?>
			<p class="text-success">Você está logado como: <?= getUsuarioLogado() ?></p>
	<?php
		} else {
	?>		
			<h2>Login</h2>
			<form action="login.php" method="post">
				<table class="table">
					<tr>
						<td>Email:</td>
						<td><input class="form-control" type="text" name="email"></td>
					</tr>
					<tr>
						<td>Senha:</td>
						<td><input class="form-control" type="password" name="senha"></td>
					</tr>
					<tr>
						<td><button class="btn btn-primary">Login</button></td>
					</tr>
				</table>
			</form>
	<?php
		}
	?>
<?php include("rodape.php"); ?>