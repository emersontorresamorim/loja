<?php include("cabecalho.php") ?>
	<h1>Cadastro de Produto</h1>
	<form action="adiciona-produto.php">
		Nome: 
		<input type="text" name="nome"><br/>
		Preço: 
		<input type="text" name="preco"><br/>

		<input type="submit" value="Gravar">
	</form>
<?php include("rodape.php") ?>