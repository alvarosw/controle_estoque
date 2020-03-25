<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <h2>Cadastrar Cliente</h2>

    <form action="/clientes/store" method="POST">
        @csrf
        <label>Nome:</label><input type="text" name="nome">
        <br><br>
        <label>Endereço:</label>
        <input type="text" name="endereco">
        <br><br>
        <label>Telefone:</label>
        <input type="text" name="contato">
        <br><br>
        <input type="submit">
    </form>

</body>
</html>