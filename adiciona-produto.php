<?php include("cabecalho.php") ?>
	<?php 

		function gravarProduto($conexao, $nome, $preco) {
			$query = "INSERT INTO produto (nome, preco) VALUES ('{$nome}', {$preco})";
			return mysqli_query($conexao, $query);
		}

		$nome = $_GET['nome'];
		$preco = $_GET['preco'];
		$conexao = mysqli_connect('localhost:3307', 'root', '', 'loja');

		if (gravarProduto($conexao, $nome, $preco)) { ?>
			<p class="text-success">O Produto <?= $nome; ?>, no valor de <?= $preco; ?> adicionado com sucesso.</p>
		<?php } else { 
			$msg_erro = mysqli_error($conexao); ?>
			<p class="text-danger">Erro! O Produto não foi adicionado - Motivo: <?= $msg_erro; ?></p>
		<?php 
		} 
	?>
<?php include("rodape.php") ?>