<?php
function listarProdutos($conexao) {
	$query = "SELECT * FROM `produtos`"; 
	$resultado = mysqli_query($conexao, $query);
	$arr_produtos = array();

	while ( $produto = mysqli_fetch_assoc($resultado) ) {;
		array_push( $arr_produtos, $produto);
	}
	return $arr_produtos;
}

function inserirProduto($conexao, $nome, $preco) {
	$query   = "INSERT INTO `produtos`( `nome`, `preco`) VALUES ('{$nome}' , '{$preco}')";
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}

function removerProduto( $conexao, $id){
	$query   = "DELETE FROM `produtos` WHERE `id` = '{$id}'";
	return mysqli_query($conexao, $query);
}	

