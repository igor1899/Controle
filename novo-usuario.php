<h1> Novo Usuário </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
       <label>CPF do colaborador (somente os números)</label>
       <input type="text" name="cpf_colab" class="form-control">
    </div>

    <div class="mb-3">
       <label>Nome</label>
       <input type="text" name="nome_colab" class="form-control">
    </div>

    <div class="mb-3">
       <label>Senha</label>
       <input type="password" name="senha_colab" class="form-control">
    </div>

    <div class="mb-3">
       <label>Data de Admissão</label>
       <input type="date" name="admissao_colab" class="form-control">
    </div>

    <div class="mb-3">
       <input type="submit" class="btn btn-primary">
    </div>

</form>