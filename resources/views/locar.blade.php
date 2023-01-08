<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locar Filme</title>
</head>

<body>
    <div>
        <li><a href="./">voltar</a></li>
    </div>
    
    <h2>Cadastrar locação:</h2>
    <div>
        <form method="post">
            {{csrf_field()}}
            <input type="number" name="cod" placeholder="COD..." required>
            <input type="number" name="cpf" placeholder="CPF..." required>
            <input style="margin-top: 20px;" type="submit" name="cadastrarlocacao" value="Cadastrar">
        </form>
    </div>
</body>

</html>