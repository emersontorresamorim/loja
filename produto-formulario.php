<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-categoria.php");   
	include("controle-acesso.php");

	validarUsuario();

	$produto = array("nome" => "", "preco" => "", "descricao" => "", "categoria_id" => "");
	$usado = "";
	$categorias = listarCategorias($conexao);
?>
	<h1>Cadastro de Produto</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			
			<?php include("produto-formulario-base.php"); ?>

			<tr>
				<td><button class="btn btn-success" type="submit">Cadastrar</button></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>