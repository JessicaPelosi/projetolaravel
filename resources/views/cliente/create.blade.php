<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Clientes</title>
</head>
<body>
    <h1>Formulário de Inserção de Clientes</h1>
    <form action="{{ route('cliente.store') }}" method="POST">
        @CSRF
        <label for="nome"> Informe o nome do Cliente </label>
        <input type="text" name="nome" id="nome" required> <br/>
        <label for="telefone"> Informe o telefone do Cliente </label>
        <input type="text" name="telefone" id="telefone" required> <br/>
        <label for="email"> Informe o email do Cliente </label>
        <input type="text" name="email" id="email" required> <br/>
        <button type="submit"> Salvar </button>
    </form>
</body>
</html>