<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page">
        <nav>
            <a href="./" style="font-weight:bold;">Home</a>
            <ul>
                <li><a href="filmes"> Filmes </a></li>
                <li><a href="locar"> Locações </a></li>
                <li><a href="devolver">Devoluções</a></li>
            </ul>
        </nav>

        <main>
            <div class="container">
                <div class="col-1">
                    <div class="titulo-1">
                        <h2>Cadastrar Cliente:</h2>
                    </div>
                    <form method="post">
                        {{csrf_field()}}
                        <input type="text" name="nome" placeholder="Nome..." required>ex: Fulano da Vila
                        <input type="text" name="telefone" placeholder="Telefone..." required>xx xxxxx-xxxx
                        <input type="text" name="cep" placeholder="CEP..." required>xxxxx-xxx
                        <input type="text" name="cpf" placeholder="CPF..." required>xxx.xxx.xxx-xx
                        <input style="margin-top: 20px;" type="submit" name="acao" value="Cadastrar">
                    </form>
                </div>

                <div class="col-2">
                    <div class="titulo-2">
                        <h2>Clientes Cadastrados:</h2>
                    </div>
                    @foreach($clientes as $cliente)
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">nome</th>
                                <th scope="col">telefone</th>
                                <th scope="col">cep</th>
                                <th scope="col">cpf</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->telefone}}</td>
                                <td>{{$cliente->cep}}</td>
                                <td>{{$cliente->cpf}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
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
    }

    td,
    th {
        padding-right: 20px;
    }

    input {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
    }
</style>