<?php
//Conexão com o Banco de Dados
include('config.php'); 

if(isset($_POST['CPF'] ) || isset($_POST['Senha'])) {

        if(strlen($_POST['CPF']) == 0 ) {
            echo "Preencha com o seu CPF";
        } else if(strlen($_POST['Senha']) == 0 ) {
            echo "<script>alert('Preencha com a sua senha') </script>";
        } else {
          //Coleta as informações inseridas e armazena em CPF e Senha:
            $CPF = $mysqli->real_escape_string($_POST['CPF']);
            $Senha = $mysqli->real_escape_string($_POST['Senha']);

          //SQL que verifica se existe o usuário para fazer Login no sistema:
            $sql_code = "SELECT * FROM colaboradores WHERE cpf_colab = '$CPF' AND senha_colab = '$Senha'" ;
            $sql_query = $mysqli->query($sql_code) or die ("Falha na execução:". $mysqli->error);
            $quant = $sql_query->num_rows;

            if ($quant == 1) {
                $colaboradores = $sql_query->fetch_assoc();
                if(!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['CPF'] = $colaboradores['cpf_colab'];
                $_SESSION['Nome'] = $colaboradores['nome_colab'];

                header("location: index.php");

            } else {
                echo "<script>alert('Falha ao logar! Email e/ou senha incorretos') </script>";
            }
        }
}
?>
<!DOCTYPE html> 
<html lang="pt-BR">
  <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Tela de Login</title>

  </head>
  <body>
    <form class="login" action="" method="POST" >
        <h2>Login</h2>
        <div class="box-user">
        <input type="text" name="CPF">
          <label>CPF</label>
        </div>
        <div class="box-user">
        <input type="password" name="Senha">
          <label>Senha</label>
        </div>
        <div>
        <button type="submit">Entrar</button>
    </form>

  </body>
</html>
