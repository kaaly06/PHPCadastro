<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
<form action="/pessoa/save" method="post">
        <fieldset>
            <legend>Cadastro de Pessoa</legend>

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" />
            <label for="genero">Gênero:</label>
            <input name="genero" id="genero" type="text" />
            <label for="email">Email:</label>
            <input name="email" id="email" type="email" />
            <label for="endereco">Endereço:</label>
            <input name="endereco" id="endereco" type="text" />
            <label for="telefone">Telefone:</label>
            <input name="telefone" id="telefone" type="number" />
            <label for="cargo">Cargo:</label>
            <input name="cargo" id="cargo" type="text" />

            <button type="submit">Enviar</button>
        </fieldset>
</form>
</body>
</html>