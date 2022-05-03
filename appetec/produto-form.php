<?php 
require_once("./view/cabecalho.php");
require_once("./model/bd-usuario.php");
require_once("./model/logica-usuario.php");
verificaUsuario();
?>


	<h1> Cadastro de produtos </h1>

    <form action="./produto-add.php">
	
	<table class="table">
	<tr>
        <td>Nome: <input   type="text" name="nome" /> </td>
	</tr>
	
	<tr>
        <td>Preço: <input  type="number" name="preco" /></td>
	</tr>
        
	<tr>
        <td> <input type="submit" value="Cadastrar" /> </td>
	</tr>

	</table>
    </form>
	
<?php include("./view/rodape.php"); ?>
