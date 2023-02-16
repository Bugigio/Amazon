<html>
    <head>
        <title>Login con i file</title>
        <link rel=stylesheet href="../Stili/style.css"></style>
    </head>
    <body>
        <form name=registrati action=registrazione.php method=post>
            <h1>Registrazione</h1>
            <input type=text name=user placeholder="Nome utente" required/>
            <input type=password name=password placeholder="password" required/>
            <input type=submit name=registrati value=Registrati />
        </form>
        <div class=registrati>Hai già l'account? <a href=login.php>Loggati</a></div>
    </body>
</html>