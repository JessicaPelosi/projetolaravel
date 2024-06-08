<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1> Clientes </h1>
    <a href="{{ route('cliente.create') }}"> Inserir Cliente </a>
    <table>
        <tr>
            <td> Nome </td>
            <td>  </td>
        </tr>
        @foreach ($cliente as $c)
        <tr>
            <td>{{ $c->nome }}</td>
            <td>]
                <a href="{{ route('cliente.edit', $c->id) }}"> Editar </a>
                <a href="cliente/{{$c->id}}/delete"> Excluir </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>