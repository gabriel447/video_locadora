°<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>


<body>
    <div class="page">
        <nav>
            <a href="./" style="font-weight:bold;">Home</a>
            <ul>
                <li><a href="clientes"> Clientes </a></li>
                <li><a href="locar"> Locações </a></li>
                <li><a href="devolver">Devoluções</a></li>
            </ul>
        </nav>

        <main>
            <div class="container">
                <div class="col-1">
                    <div class="titulo-1">
                        <h2>Cadastrar Filme:</h2>
                    </div>

                    <form method="post">
                        {{csrf_field()}}
                        <input type="text" name="nome" placeholder="Nome..." required>ex: Poeira em Alto Mar
                        <input type="text" name="genero" placeholder="Gênero..." required>ex: Aventura
                        <input type="number" name="ano" placeholder="Ano de Lançamento.." required>apenas 4 dígitos
                        <input type="number" name="cod" placeholder="Código..." required>apenas 7 dígitos
                        <input style="margin-top: 20px;" type="submit" name="cadastrarfilme" value="Cadastrar">
                    </form>
                </div>
                <div class="col-2">
                    <div class="titulo-2">
                        <h2>Filmes Cadastrados:</h2>
                    </div>
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
            </div>
        </main>
    </div>
</body>

</html>
<style>
    body {
        margin: 0;

        font-family: 'Open Sans', sans-serif;

        background: linear-gradient(180deg, rgba(227, 255, 248, 0) 82.08%, rgba(227, 255, 248, 0.38) 100%);

        min-height: 100vh;
    }

    .page {
        width: 1000px;
        margin: 0 auto;
        padding-top: 65px;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;

        margin-bottom: 55px;
    }

    main {
        display: block;
        align-items: center;
        justify-content: space-between;
    }

    h2 {
        color: tomato;
    }

    .container {
        display: flex;
        justify-content: space-between;
    }

    .col-2 {
        text-align: center;
    }

    /* NAV */

    ul {
        display: flex;
        gap: 48px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    a {
        color: #1F1534;
        text-decoration: none;
    }

    ul li a {
        opacity: 0.5;
    }

    /* pseudo-class */
    ul li a:hover {
        font-weight: bold;
        opacity: 1;
    }

    h1,
    ul {
        font-family: 'Mulish', sans-serif;
    }

    /* TABELA */

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