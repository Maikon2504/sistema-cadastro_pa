<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST" action="processamento/cadastra">
        <div class="form-group">
            <label for="vch_nome">Nome:</label>
            <input type="text" id="vch_nome" name="vch_nome" class="form-control" placeholder="Digite o nome">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Digite o cpf">
        </div>
        <div class="form-group">
            <label for="rg">RG:</label>
            <input type="text" id="rg" name="rg" class="form-control" placeholder="Digite o rg">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="number" id="telefone" name="telefone" class="form-control" placeholder="Digite o telefone">
        </div>
        <div class="form-group">
            <label for="vch_nome_pai">Nome do pai:</label>
            <input type="text" id="vch_nome_pai" name="vch_nome_pai" class="form-control" placeholder="Digite o nome da pai">
        </div>
        <div class="form-group">
            <label for="vch_nome_mae">Nome da mãe:</label>
            <input type="text" id="vch_nome_mae" name="vch_nome_mae" class="form-control" placeholder="Digite o nome da mãe">
        </div>
        <div class="form-group">
            <label for="data_nasc">Data de nascimento:</label>
            <input type="date" id="data_nasc" class="form-control" name="data_nasc">
        </div>
        <div class="form-group">
            <label for="cep">CEP:</label>
            <input type="number" id="cep" name="cep" class="form-control" placeholder="Digite o CEP">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Digite o endereco">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Digite a cidade">
        </div>
        <input type="hidden" value="1">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>