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

    <h2>Histórico de Devoluções:</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">cpf</th>
                    <th scope="col">cod</th>
                    <th scope="col">data de entrega</th>
                    <th scope="col">valor da locação</th>
                    <th scope="col">valor da multa</th>
                    <th scope="col">valor total</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>09134575901</td>
                    <td>2312948</td>
                    <td>2023-01-09</td>
                    <td>R$ <a>10</a>.00</td>
                    <td style="color:red;";>R$ <a>3</a>.00</td>
                    <td>R$ <a>13</a>.00</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2>Devolver Filme:</h2>
    <div>
        <form method="post">
            {{csrf_field()}}
            <input type="number" name="cod" placeholder="COD..." required>
            <input type="number" name="cpf" placeholder="CPF..." required>
            <input style="margin-top: 20px;" type="submit" name="devolver" value="Devolver">
        </form>
    </div>
</body>

</html>
<style>
    table {
        text-align: center;
        padding-bottom: 20px;
    }

    td,
    th {
        padding-right: 20px;
    }

    input {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
    }
</style>