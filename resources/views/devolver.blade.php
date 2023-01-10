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
                    <th scope="col">cod</th scope="col">
                    <th scope="col">cpf</th scope="col">
                    <th scope="col">data de devolucao</th scope="col">
                    <th scope="col">valor</th scope="col">
                    <th scope="col">multa</th scope="col">
                    <th scope="col">valor total</th scope="col">
                </tr>
            </thead>
            @foreach($historicos as $hist)
            <tbody>
                <tr>
                    <th scope="row">{{$hist->cod_filme}}</th>
                    <td>{{$hist->cpf_cliente}}</td>
                    <td>{{$hist->data_devolucao}}</td>
                    <td>{{$hist->valor}}</td>
                    @if($hist->multa >= 3)
                    <td style="color:red;">sim</td>
                    @else
                    <td>não</td>
                    @endif
                    <td>R$ <a>{{$hist->valor_total}}</a></td>
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
            <input type="text" name="cpf" placeholder="CPF..." required>
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