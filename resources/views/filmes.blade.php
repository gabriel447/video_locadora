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
                    <td>{{$filme->cod}}</td>
                    <td>{{$filme->nome}}</td>
                    <td>{{$filme->genero}}</td>
                    <td>{{$filme->lancamento}}</td>

                    @if($filme->disponivel == 1)
                    <td style="color:red;">locado</td>
                    @else
                    <td>ok</td>
                    @endif
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    <h2>Cadastrar Filme:</h2>
    <div>
        <form method="post">
            {{csrf_field()}}
            <input type="text" name="nome" placeholder="Nome..." required>
            <input type="text" name="genero" placeholder="Gênero..." required>
            <input type="number" name="ano" placeholder="Ano de Lançamento.." required>
            <input type="number" name="cod" placeholder="Código..." required>
            <input style="margin-top: 20px;" type="submit" name="cadastrarfilme" value="Cadastrar">
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