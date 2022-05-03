<?php require_once("./view/cabecalho.php");
      require_once("./model/logica-usuario.php"); ?>

<?php if(usuarioEstaLogado()) { ?>
    <p class="text-success">Você está logado como <?= usuarioLogado() ?>. <a href="logout.php">Sair</a></p>
<?php } else { ?>
    <h2>Login</h2>

    <form action="login.php" method="post">

    <table class="table">
            <tr>
                <td><label for="email" class="col-sm-2 control-label">Usuário:</label></td>
                <td><div class="col-sm-4">		
                    <input type="text" class="form-control inputstl" id="email" name="email">	</div></td>
            </tr>
            <tr>
                <td><label for="senha" class="col-sm-2 control-label">Senha:</label> </td>
                <td><div class="col-sm-4"> 
                    <input class="form-control inputstl" type="password" id="senha" name="senha"> </div></td>
            </tr>
            <tr>
                <td colspan=2><div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-lg btn-block btn-success" type="submit">Entrar</button> </div></td>
            </tr>
			
        </table>
    </form>
<?php } ?>

<?php require_once("./view/rodape.php"); ?>
