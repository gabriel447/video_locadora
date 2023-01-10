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

    <h2>Histórico de Locações:</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">cod</th>
                    <th scope="col">nome do filme</th>
                    <th scope="col">cpf</th>
                    <th scope="col">nome do cliente</th>
                    <th scope="col">data de locação</th>
                </tr>
            </thead>
            @foreach($controle as $ctrl)
            <tbody>
                <tr>
                    <td>{{$ctrl->cod_filme}}</td>
                    <td>{{$ctrl->nome_filme}}</td>
                    <td>{{$ctrl->cpf_cliente}}</td>
                    <td>{{$ctrl->nome_cliente}}</td>
                    <td>{{$ctrl->data_locado}}</td>
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
            <input type="text" name="cpf" placeholder="CPF..." required>
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