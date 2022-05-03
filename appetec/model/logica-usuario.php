<?php
session_start();

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
      $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
     header("Location: index.php");
     die();
  }
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function nivelUsuario() {
    return $_SESSION["nivel"];
}

function logaUsuario($email, $nivel) {
    $_SESSION["usuario_logado"] = $email;
    $_SESSION["nivel"] = $nivel;
}

function logout() {
    session_destroy();
    session_start();
}
