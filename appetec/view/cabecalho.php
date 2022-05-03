<?php error_reporting(E_ALL ^ E_NOTICE); require_once("mostra-alerta.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/menuh.css">
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/lojamob.css" rel="stylesheet" />
<!--jQuery-->
<script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
<!--Script-->
<script src="./js/lib.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
    <div class="principal">
    <table class="table">
        <tr><td><h1>Etec</h1></td>
            <td><div class="col-sm-4"><img src="img/eteclogo.jpg" height="80" width="80"> </div></td>
        </tr>
    </table>
    <div class="topnav" id="TopnavMenu">
        <a href="./index.php">  <i class="fa fa-home"></i> </a>
        <a href="./produto-listar.php"> <i class="fa fa-check"></i></a>
        <a href="https://wa.me/5511999999999">   <i class="fa fa-whatsapp"></i></a>
        <a href="./produto-form.php">     <i class="fa fa-plus-circle"></i> </a>
        <a href="javascript:void(0);" class="icon" onclick="menuNav()">    <i class="fa fa-bars"></i>    </a>
    </div>
        <?php
        mostraAlerta("success");
        mostraAlerta("danger");
        ?>