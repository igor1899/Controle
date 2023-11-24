<?php
    if (isset($_REQUEST["acao"])) {
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $cpf_colab = $_POST["cpf_colab"];
            $nome_colab = $_POST["nome_colab"];
            $senha_colab = $_POST["senha_colab"];
            $admissao_colab = $_POST["admissao_colab"];

            $sql = "INSERT INTO colaboradores (cpf_colab, nome_colab, senha_colab, admissao_colab) VALUES ('$cpf_colab','$nome_colab','$senha_colab','$admissao_colab');" ;
            
            $res=$mysqli->query($sql);

            if($res==true) {
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else {
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome_colab = $_POST["nome_colab"]; 
            $admissao_colab = $_POST["admissao_colab"];

        $sql = "UPDATE colaboradores SET 
        nome_colab='{$nome_colab}',
        admissao_colab='{$admissao_colab}'
        WHERE
        cpf_colab='{$_REQUEST["cpf_colab"]}'";

            $res=$mysqli->query($sql);
            if($res==true) {
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'excluir':
            if ($_REQUEST["cpf_colab"]) {
            print "<script>alert('Sessão ativa no momento, não é possivel excluir o acesso.');</script>"; 
            }else{
                
            $sql = "DELETE FROM colaboradores WHERE cpf_colab='{$_REQUEST["cpf_colab"]}'";
            $res=$mysqli->query($sql);

            if($res==true) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
           
            }
            break;
        }
    }
?>
