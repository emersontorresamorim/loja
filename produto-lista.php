<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-produto.php"); 
?>
	<h1>Lista de Produtos</h1>

	<?php
		if (array_key_exists('removido', $_GET) && $_GET['removido'] == true) {
	?>
			<p class="text-success">Produto removido com sucesso.</p>
	<?php
		}
	?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>NOME</th>			
				<th>PREÇO</th>
				<th>DESCRIÇÃO</th>
				<th>AÇÃO</th>
			</tr>
		</thead>
		<?php 
			$produtos = listarProdutos($conexao);
			foreach ($produtos as $produto) :
		?>
		<tbody>
			<tr>
				<td><?= $produto['nome']; ?></td>			
				<td><?= $produto['preco']; ?></td>
				<td><?= substr($produto['descricao'], 0, 40); ?></td>
				<td>
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?= $produto['id'] ?>">
						<button class="btn btn-danger">Remover</a>
					</form>
				</td>
			</tr>
		</tbody>
		<?php 
			endforeach
		?>
	</table>	
<?php include("rodape.php"); ?>