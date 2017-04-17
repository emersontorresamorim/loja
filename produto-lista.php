<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-produto.php");
	include("controle-acesso.php");

	validarUsuario();
?>
	<h1>Lista de Produtos</h1>

	<?php
		if (isset($_SESSION['success'])) {
	?>
			<p class="alert-success"><?= $_SESSION['success'] ?></p>
	<?php
			unset($_SESSION['success']);
		}
	?>
	
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>NOME</th>			
				<th>PREÇO</th>
				<th>DESCRIÇÃO</th>
				<th>USADO?</th>
				<th>CATEGORIA</th>
				<th>ALTERAR</th>
				<th>REMOVER</th>
			</tr>
		</thead>
		<?php 
			$produtos = listarProdutos($conexao);
			foreach ($produtos as $produto) :
				$usado = $produto['usado'] == 0 ? 'NÃO' : 'SIM';
		?>
		<tbody>
			<tr>
				<td><?= $produto['nome']; ?></td>			
				<td><?= $produto['preco']; ?></td>
				<td><?= substr($produto['descricao'], 0, 40); ?></td>
				<td><?= $usado; ?></td>
				<td><?= $produto['categoria_nome']; ?></td>
				<td>
					<a class="btn btn-primary" href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">Alterar</a>
				</td>
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