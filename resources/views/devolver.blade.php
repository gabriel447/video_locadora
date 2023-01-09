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
                    <th scope="col">cpf_cliente</th scope="col">
                    <th scope="col">cod_filme</th scope="col">
                    <th scope="col">data_devolucao</th scope="col">
                    <th scope="col">valor</th scope="col">
                    <th scope="col">multa</th scope="col">
                    <th scope="col">valor_total</th scope="col">
                </tr>
            </thead>
            @foreach($historicos as $hist)
            <tbody>
                <tr>
                    <td>{{$hist->cpf_cliente}}</td>
                    <td>{{$hist->cod_filme}}</td>
                    <td>{{$hist->data_devolucao}}</td>
                    <td>{{$hist->valor}}</td>
                    <td style="color:red">{{$hist->multa}}</td>
                    <td>{{$hist->valor_total}}</td>
                </tr>
            </tbody>
            @endforeach
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