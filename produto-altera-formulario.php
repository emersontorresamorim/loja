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
			<tr>
				<td>Nome:</td> 
				<td><input class="form-control" type="text" name="nome" value="<?= $produto['nome'] ?>"></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco" value="<?= $produto['preco'] ?>"></td>
			</tr>
			<tr>
				<td>Descrição:</td>
				<td><textarea class="form-control" name="descricao"><?= $produto['descricao'] ?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" <?= $usado ?> value="true"> Usado</td>
			</tr>
			<tr>
				<td>Categoria:</td>
				<td>
					<select class="form-control" name="categoria_id">
						<option value="">Selecione</option>
						<?php foreach ($categorias as $categoria) : 
							$isCategoriaSelecionada = $produto['categoria_id'] == $categoria['id'];
							$categoriaSelecionada = $isCategoriaSelecionada ? "selected='selected'" : "";
						?>
							<option value="<?= $categoria['id'] ?>" <?= $categoriaSelecionada ?>>
								<?= $categoria['nome'] ?>
							</option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><button class="btn btn-success" type="submit">Alterar</button></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>