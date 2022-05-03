<?php 
require_once("./view/cabecalho.php");
require_once("./model/bd-usuario.php");
require_once("./model/logica-usuario.php");
verificaUsuario();
?>

<?php include("./model/bd-produto.php"); ?>

<?php
$produtos = listarProdutos($conexao);
?>
<table class="table table-striped table-bordered"> 

<?php
foreach($produtos as $umproduto) {
?>	
	<tr>
		<td> <?= $umproduto['nome'] ?></td>
		<td> <?= $umproduto['preco'] ?></td>
		<td> <a href="produto-del.php?id=<?=$umproduto['id']?>" class="text-danger"><i class="fa fa-minus-circle"></i></td>
		
	</tr>
<?php
}
?>
</table>

<?php include("./view/rodape.php"); ?>
