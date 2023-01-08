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

    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">nome_cliente</th>
                    <th scope="col">cpf_cliente</th>
                    <th scope="col">nome_filme</th>
                    <th scope="col">cod_filme</th>
                    <th scope="col">data_locado</th>
                    <th scope="col">valor</th>
                </tr>
            </thead>
            @foreach($controle as $ctrl)
            <tbody>
                <tr>
                    <td>{{$ctrl->nome_cliente}}</td>
                    <td>{{$ctrl->cpf_cliente}}</td>
                    <td>{{$ctrl->nome_filme}}</td>
                    <td>{{$ctrl->cod_filme}}</td>
                    <td>{{$ctrl->data_locado}}</td>
                    <td><a>R$ </a>{{$ctrl->valor}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    
    <h2>Cadastrar locação:</h2>
    <div>
        <form method="post">
            {{csrf_field()}}
            <input type="number" name="cod" placeholder="COD..." required>
            <input type="number" name="cpf" placeholder="CPF..." required>
            <input style="margin-top: 20px;" type="submit" name="locar" value="Cadastrar">
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