<?php include("cabecalho.php") ?>
	<?php 
		$nome = $_GET['nome'];
		$preco = $_GET['preco'];

		$query = "INSERT INTO produto (nome, preco) VALUES ('{$nome}', {$preco})";

		$conexao = mysqli_connect('localhost:3307', 'root', '', 'loja');
		if (mysqli_query($conexao, $query)) { ?>
			<p class="alert-success">O Produto <?= $nome; ?>, no valor de <?= $preco; ?> adicionado com sucesso.</p>
		<?php } else { ?>
			<p class="alert-danger">Erro! O Produto não foi adicionado.</p>
		<?php } 
		mysqli_close($conexao);
	?>
<?php include("rodape.php") ?>