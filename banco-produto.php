<?php

	function listarProdutos($conexao) {
		$produtos = [];
		$query = "SELECT * FROM produto";
		$resultado = mysqli_query($conexao, $query);
		while ($produto = mysqli_fetch_assoc($resultado)) {
			array_push($produtos, $produto);
		}
		return $produtos;
	}


	function gravarProduto($conexao, $nome, $preco, $descricao) {
		$query = "INSERT INTO produto (nome, preco, descricao) VALUES ('{$nome}', {$preco}, '{$descricao}')";
		return mysqli_query($conexao, $query);
	}


	function removerProduto($conexao, $id) {
		$query = "DELETE FROM produto WHERE id = {$id}";
		return mysqli_query($conexao, $query);
	}