<?php

include('protect.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>

    Seja bem vindo, <?php echo $_SESSION['Nome'];?>

    <p>
    <a href="sair.php">Sair</a>
    </P>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="conteiner-fluid">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <a class="navbar-brand" href="?page=novo">Novo Usuário</a>
        <a class="navbar-brand" href="?page=listar">Listar usuários</a>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
          <?php
            include("config.php");
            switch(@$_REQUEST["page"]) {
              case "novo": include("novo-usuario.php");
              break;
              case "listar": include("listar-usuario.php");
              break;
              case "editar": include("editar-usuario.php");
              break;
              case "salvar": include("salvar-usuario.php");
              break;
              default:
              print "<h1>Bem vindo!</h1>";
            }
          ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
