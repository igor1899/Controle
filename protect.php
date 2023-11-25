<?php

if ( !isset($_SESSION)) {
  session_start();
}

if ( !isset($_SESSION['CPF'])) {
    die("Você não está logado para acessar essa página.<p><a href=\"login.php\">Entrar</a></p>");
}
?>
