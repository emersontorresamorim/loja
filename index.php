<?php 
	include("cabecalho.php");
	include("controle-acesso.php"); 
?>
	<h1>Bem vindo ao Controle de Produtos!</h1>

	<?php
		if (isset($_SESSION['danger'])) {
	?>
			<p class="alert-danger"><?= $_SESSION['danger'] ?></p>
	<?php
			unset($_SESSION['danger']);
		}
	?>

	<?php
		if (isset($_SESSION['success'])) {
	?>
			<p class="alert-success"><?= $_SESSION['success'] ?></p>
	<?php
			unset($_SESSION['success']);
		}
	?>

	<?php
		if (isUsuarioLogado()) {
	?>
			<p class="text-success">Você está logado como: <?= getUsuarioLogado() ?>
				<a href="logout.php">Logout</a>
			</p>
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