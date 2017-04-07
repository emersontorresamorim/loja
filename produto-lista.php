<?php 
	include("cabecalho.php"); 
	include("conectar-db.php"); 
	include("banco-produto.php"); 
?>
	<h1>Lista de Produtos</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>NOME</th>			
				<th>PREÇO</th>
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
			</tr>
		</tbody>
		<?php 
			endforeach
		?>
	</table>	
<?php include("rodape.php"); ?>