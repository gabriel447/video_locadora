<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page">
        <nav>
            <a href="/login" style="font-weight:bold;">Login</a>

            <ul>
                <li><a href="clientes"> Clientes </a></li>
                <li><a href="filmes"> Filmes </a></li>
                <li><a href="locar"> Locações </a></li>
                <li><a href="devolver">Devoluções</a></li>
            </ul>
        </nav>
        <main>
            <section>
                <h1>Seja <span>Bem-Vindo</span>
                    ao sistema de locação de filmes.</h1>
                <p>
                    Esse projeto foi criado como <strong>Portfólio</strong><br />
                    para mostrar minhas <strong>Habilidades com a Linguagem PHP</strong> <br />
                    e para me desafiar a usar o <strong>Framework Laravel</strong>.
                </p>
                <a class="button" href="https://wa.me/5541987998159" target="_blank">
                    Dar Feedback!
                </a>
            </section>
        </main>

        <footer>
            Siga-me no instagram <a href="https://instagram.com/coffee4code" target="_blank">@gabeecwb</a>
        </footer>
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
        display: flex;
        align-items: center;
        justify-content: space-between;
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

    

    h1 {
        font-size: 49px;
        line-height: 56px;
        color: #1F1534;

        font-weight: normal;

        width: 490px;
    }

    h1 span {
        color: tomato;
        font-weight: bold;
    }

    section p {
        font-size: 14px;
        line-height: 28px;
        color: #7D7987;

        width: 440px;

        margin: 40px 0;
    }

    .button {
        color: white;
        text-transform: uppercase;
        font-family: 'Open Sans', sans-serif;

        background: lightcoral;
        border: 0;
        padding: 14px 32px 15px;

        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;

        border-radius: 4px;

        cursor: pointer;
    }

    .button:hover {
        background: red;
    }

    footer {
        font-size: 14px;
        line-height: 28px;

        text-align: center;

        margin-top: 80px;
    }

    footer a {
        font-weight: bold;
    }
</style>