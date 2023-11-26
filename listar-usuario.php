<h1> Listar Usuário </h1>
<?php
    $sql = "SELECT * FROM colaboradores";

    $res = $mysqli ->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print"<table class='table table-hover table-bordered table-striped tab'>";
            print "<tr>";
            print "<th>CPF</th>";
            print "<th>Nome do colaborador</th>";
            print "<th>Data de Admissão</th>";
            print "<th>Opções</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row -> cpf_colab."</td>";
            print "<td>".$row -> nome_colab."</td>";
            print "<td>".date("d/m/Y", strtotime($row->admissao_colab))."</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&cpf_colab=".$row->cpf_colab."';\" class= btn-success'>Editar</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p class='alert-danger'>Não encontrou resultados!</p>";
    }
?>
