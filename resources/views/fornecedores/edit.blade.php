<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecedores</title>
</head>
<body>
    <h2>Editar Fornecedor</h2>

    <form action="/fornecedores/{{$fornecedor->id}}/update" method="POST">
        @csrf
        <input type="text" placeholder="Nome" name="nome" value="{{ $fornecedor->nome }}">

        <label for="status">Status:</label>
        <select name="ativo">
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>
        <br><br>
        <input type="submit">
        @method('PUT')
    </form>
</body>
</html>