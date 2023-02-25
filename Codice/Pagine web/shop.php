<?php
    if(!isSet($_REQUEST['user'])){
        header("location: login.php?err=1");
        die();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login con i file</title>
        <link rel="stylesheet" href="../Stili/shop.css">
    </head>
    <body>
        <header>
            <div id="header">
                <table class="menu">
                    <tr><td><a href="#">libri</a></td><td><a href="#">libri</a></td><td><a href="#">libri</a></td><td><a href="#">libri</a></td><td><a href="#">libri</a></td><td><td align="right"><a href="#">account</a></td></tr>
                </table>
            </div>
        </header>
        <div class="container">
            <div class="articolo">
                <table border="1" class="articolo">
                    <tr><td class="immagine"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></td><td class="descrizione">descrizione</td><td class="quantita_acquisto">quantità da acquistare</td></tr>
                </table>
            </div>
            <div class="articolo">
                <table border="1" class="articolo">
                    <tr><td class="immagine">immagine</td><td class="descrizione">descrizione</td><td class="quantita_acquisto">quantità da acquistare</td></tr>
                </table>
            </div>
            <div class="articolo">
                <table border="1" class="articolo">
                    <tr><td class="immagine">immagine</td><td class="descrizione">descrizione</td><td class="quantita_acquisto">quantità da acquistare</td></tr>
                </table>
            </div>
            <div class="articolo">
                <table border="1" class="articolo">
                    <tr><td class="immagine">immagine</td><td class="descrizione">descrizione</td><td class="quantita_acquisto">quantità da acquistare</td></tr>
                </table>
            </div>
            <div class="articolo">
                <table border="1" class="articolo">
                    <tr><td class="immagine">immagine</td><td class="descrizione">descrizione</td><td class="quantita_acquisto">quantità da acquistare</td></tr>
                </table>
            </div>
        </div>
        <footer></footer>
    </body>
</html>