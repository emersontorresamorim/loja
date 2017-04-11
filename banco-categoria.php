<?php

	function listarCategorias($conexao) {
		$categorias = [];
		$query = "SELECT * FROM categoria";
		$resultado = mysqli_query($conexao, $query);
		while ($categoria = mysqli_fetch_assoc($resultado)) {
			array_push($categorias, $categoria);
		}
		return $categorias;
	}