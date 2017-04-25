<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-categoria.php");
	include("banco-produto.php");
	include("controle-acesso.php");

	validarUsuario();  

	$id = $_GET['id'];
	$produto = buscarProduto($conexao, $id);
	$categorias = listarCategorias($conexao);
	$usado = $produto['usado'] ? "checked='checked'" : "";
?>
	<h1>Alteração de Produto</h1>
	<form action="altera-produto.php" method="post">
		<input type="hidden" name="id" value="<?= $produto['id'] ?>">
		<table class="table">

			<?php include("produto-formulario-base.php"); ?>
			
			<tr>
				<td><button class="btn btn-success" type="submit">Alterar</button></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>