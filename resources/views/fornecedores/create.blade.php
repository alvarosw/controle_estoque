<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecedores</title>
</head>
<body>
    <h2>Cadastrar Fornecedor</h2>

    <form action="/fornecedores/store" method="POST">
        @csrf
        <input type="text" placeholder="Nome" name="nome">

        <label for="status">Status:</label>
        <select name="status">
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>
        <br><br>
        <input type="submit">
    </form>
</body>
</html>