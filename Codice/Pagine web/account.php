<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
        <link rel="stylesheet" href="../Stili/account.css">
        <?php
            $account = new DOMDocument();
            $account->load("../XML/utenti/" . $_REQUEST['user'] .  ".xml");

        ?>
    </head>
    <body style="margin: 0px;">
        <header>
            <div class="header">
                <div class="sezione"><a href="shop/libri.php?user=<?php echo $_REQUEST['user']; ?>&categoria=libri">LIBRI</a></div><div class="sezione"><a href="shop/tecnologia.php?user=<?php echo $_REQUEST['user']; ?>&categoria=tecnologia">TECNOLOGIA</a></div><div class="sezione"><a href="shop/film.php?user=<?php echo $_REQUEST['user']; ?>&categoria=film">FILM</a></div><div class="sezione"><a href="shop/vestiti.php?user=<?php echo $_REQUEST['user']; ?>&categoria=vestiti">VESTITI</a></div><div class="sezione"><a href="shop/sport.php?user=<?php echo $_REQUEST['user']; ?>&categoria=sport">SPORT</a></div><div id="pulsante_account"><a href="#">ACCOUNT</a></div>
            </div>
        </header>
        <div class="account_container">
            <div id="immagine_utente"><img id="img_account" src="https://cdn.calciomercato.com/images/2019-05/Whatsapp.senza.immagine.2019.460x340.jpg" alt=""></div>
            <div id="descrizione_utente">
                <h3>Nome utente</h3>
                <h4>Saldo: <?php echo $account->getElementsByTagName('saldo')->item(0)->nodeValue;?></h4>
            </div>
        </div>
        <div class="ordini_container">
            
        </div>
        
        <?php

        ?>
    </body>
</html>