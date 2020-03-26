<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <h2>Editar Cliente</h2>

    <form action="/clientes/{{$cliente->id}}/update" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $cliente->nome }}">
        <br><br>
        <label>Endereço:</label>
        <input type="text" name="endereco" value="{{ $cliente->endereco }}">
        <br><br>
        <label>Telefone:</label>
    <input type="text" name="contato" value="{{ $cliente->contato }}">
        <br><br>
        <input type="submit">
        @method('PUT')
    </form>
</body>
</html>