<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes | Lista</title>
</head>

<body>

    <div>
        <li><a href="./">voltar</a></li>
    </div>
    <h2>Lista de clientes:</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">nome</th>
                    <th scope="col">telefone</th>
                    <th scope="col">cep</th>
                    <th scope="col">cpf</th>
                </tr>
            </thead>
            @foreach($clientes as $cliente)
            <tbody>
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->telefone}}</td>
                    <td>{{$cliente->cep}}</td>
                    <td>{{$cliente->cpf}}</td>
                    <td><a href="{{$cliente->id}}">apagar</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    <h2>Cadastrar cliente:</h2>
    <div>
        <form method="post">
            {{csrf_field()}}
            <input type="text" name="nome" placeholder="Nome..." required>
            <input type="number" name="telefone" placeholder="Telefone..." required>
            <input type="number" name="cep" placeholder="CEP..." required>
            <input type="cpf" name="cpf" placeholder="CPF..." required>
            <input style="margin-top: 20px;" type="submit" value="Cadastrar">
        </form>
    </div>


</body>

</html>

</html>
<style>
    table {
        align-items: center;
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