<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
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

    <main class="container">
    <div style="padding: 1%;">
        <nav class="navbar navbar-dark" style="background-color: MidnightBlue;  border-radius: 10px;">
        <div class="container-fluid">
            <img src="https://img.icons8.com/?size=100&id=wMPzn3Oho5QE&format=png&color=000000" alt="" width="30" height="24">
            <a class="navbar-brand"> Loja de instrumentos </a>
            <form class="d-flex">
            </form>
        </div>
        </nav>
    </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <a href="{{ route('instrumento.create') }}" class="btn btn-dark"><b> Inserir Instrumento </b></a>
        <div>
        <table style="table-layout: fixed;" class="table table-stripped table-hover " id="tabela" >
            <thead>
                <tr>
                    <td> Tipo </td>
                    <td> Nome </td>
                    <td> Preço </td>
                    <td> </td>
                </tr>
            </thead>
            <tbody>
            @foreach ($instrumento as $i)
                <tr>
                    <td>{{ $i->tipo }}</td>
                    <td>{{ $i->nome }}</td>
                    <td> R$ &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ $i->preco }}</td>
                    <td style="text-align: right;">
                        <a href="{{ route('instrumento.show', $i->id) }}" class="btn btn-primary"><b> Mostrar </b></a>
                        <a href="{{ route('instrumento.edit', $i->id) }}" class="btn btn-dark"><b> Editar </b></a>
                        <a href="{{ route('instrumento.delete', $i->id) }}" class="btn btn-danger"><b> Excluir </b></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        var table = new DataTable('#tabela', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.6/i18n/pt-BR.json',
            },
        });
    </script>
</body>
</html>