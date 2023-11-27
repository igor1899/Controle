<h1> Novo Usuário </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
    <label>CPF do colaborador (somente os números)</label>
    <input type="text" name="cpf_colab" maxlength="11" class="form-control" oninput="validateCPFLength(this)">
</div>

<script>
    function validateCPFLength(inputField) {
        var maxLength = parseInt(inputField.getAttribute('maxlength'));
        var currentValue = inputField.value;

        if (currentValue.length < maxLength) {
            // O CPF tem menos de 11 caracteres
            // Aqui você pode adicionar lógica adicional ou uma mensagem de erro, se necessário
            console.log('CPF incompleto. Insira os 11 dígitos.');
        }
    }
</script>

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
