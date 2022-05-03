<?php 
require_once("./view/cabecalho.php");
require_once("./model/bd-usuario.php");
require_once("./model/logica-usuario.php");
require_once("./model/bd-produto.php");
verificaUsuario();
?>

<?php
$id = $_GET['id'];

if (  removerProduto( $conexao, $id) ) {
?>
	<p class="alert-success"> Produto <?= $id?> Removido com sucesso! </p>
<?php
} else {
?>
	<p class="alert-danger"> Produto <?= $id?> não foi removido! </p>
<?php
}	
?>

<?php include("./view/rodape.php"); ?>


