<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de Instrumentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <img src="https://play-lh.googleusercontent.com/CVZHrj0Pt2TeqOGwjMeSUIwAt_DP1Wv77Vehxi6mDT0_Vj2kk3GNuDLTDO50YqMKPali=w240-h480-rw" alt="" width="30" height="24">
        <a class="navbar-brand"> Projeto Laravel - Programação Web </a>
        <form class="d-flex">
        </form>
      </div>
    </nav>

    <div style="padding: 0.5%;">
        <a href="/instrumento"> <button class="btn btn-dark"> Voltar </button> </a>
    </div>

    <main class="container">
    <h1>Formulário de Exclusão de Instrumentos</h1>
    <form action="{{ route('instrumento.destroy', $instrumento->id) }}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="tipo"> Informe o tipo do Instrumento </label>
        <input class="form-control" type="text" name="tipo" id="tipo" value="{{ $instrumento->tipo}}" disabled> <br/>
        <label for="nome"> Informe o nome do Instrumento </label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{ $instrumento->nome}}" disabled> <br/>
        <label for="preco"> Informe o preco do Instrumento </label>
        <input class="form-control" type="text" name="preco" id="preco" value="{{ $instrumento->preco}}" disabled> <br/>
        <button type="submit" class="btn btn-danger"> Excluir </button>
    </form>
</body>
</html>