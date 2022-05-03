<?php 
require_once("./view/cabecalho.php");
require_once("./model/bd-usuario.php");
require_once("./model/logica-usuario.php");
verificaUsuario();
?>

<?php include("./model/bd-produto.php"); ?>
		
<?php
$nome    = $_GET["nome"];
$preco   = $_GET["preco"];

if (  inserirProduto($conexao, $nome, $preco) ) {
?>
	<p class="alert-success"> Produto <?= $nome?>, Preço <?= $preco?>   adicionado com sucesso! </p>
<?php
} else {
?>
	<p class="alert-danger"> Produto <?= $nome?> não foi adicionado! </p>
<?php
}	
?>

<?php include("./view/rodape.php"); ?>


