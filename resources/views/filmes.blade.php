<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes | Lista</title>
</head>

<body>
    <div>
        <li><a href="./">voltar</a></li>
    </div>

    <h2>Lista de filmes:</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">cod</th>
                    <th scope="col">nome do filme</th>
                    <th scope="col">gênero</th>
                    <th scope="col">lançamento</th>
                    <th scope="col">disponibilidade</th>
                </tr>
            </thead>
            @foreach($filmes as $filme)
            <tbody>
                <tr>
                    <th scope="row">{{$filme->cod}}</th>
                    <td>{{$filme->nome}}</td>
                    <td>{{$filme->genero}}</td>
                    <td>{{$filme->lancamento}}</td>

                    @if($filme->disponivel == 1)
                    <td>locado</td>
                    @else
                    <td>ok</td>
                    @endif
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
            <input style="margin-top: 20px;" type="submit" name="cadastrar" value="Cadastrar">
        </form>
    </div>

</body>

</html>
<style>
    table {
        text-align: center;
        padding-bottom: 20px;
    }

    th,
    td {
        padding-right: 20px;
    }
</style>