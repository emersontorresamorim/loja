<?php

	function listarProdutos($conexao) {
		$produtos = [];
		$query = "SELECT p.*, c.nome AS categoria_nome FROM produto AS p JOIN categoria AS c ON p.categoria_id = c.id";
		$resultado = mysqli_query($conexao, $query);
		while ($produto = mysqli_fetch_assoc($resultado)) {
			array_push($produtos, $produto);
		}
		return $produtos;
	}


	function gravarProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
		$query = "INSERT INTO produto (nome, preco, descricao, categoria_id, usado) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
		return mysqli_query($conexao, $query);
	}


	function atualizarProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
		$query = "UPDATE produto SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} 
				  WHERE id = {$id}";
		return mysqli_query($conexao, $query);
	}


	function removerProduto($conexao, $id) {
		$query = "DELETE FROM produto WHERE id = {$id}";
		return mysqli_query($conexao, $query);
	}


	function buscarProduto($conexao, $id) {
		$query = "SELECT * FROM produto WHERE id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}