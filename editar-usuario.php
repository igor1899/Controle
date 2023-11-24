<h1> Editar Usuário </h1>
<?php
    $sql = "SELECT * FROM colaboradores WHERE cpf_colab=".$_REQUEST["cpf_colab"];
    $res=$mysqli->query($sql);
    $row=$res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="cpf_colab" value="<?php print $row->cpf_colab; ?>">

    <div class="mb-3">
       <label>Nome</label>
       <input type="text" name="nome_colab" value="<?php print $row->nome_colab; ?>" class="form-control">
    </div>

    <div class="mb-3">
       <label>Data de Admissão</label>
       <input type="date" name="admissao_colab" value="<?php print $row->admissao_colab; ?>" class="form-control">
    </div>

    <div class="mb-3">
       <input type="submit" class="btn btn-primary">
    </div>

</form>