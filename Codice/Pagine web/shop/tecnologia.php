<?php
    if(!isSet($_REQUEST['user'])){
        header("location: ../login.php?err=1");
        die();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tecnologia</title>
        <link rel="stylesheet" href="../../Stili/shop.css">
        <script src="../JS/shop.js"></script>
        <?php
            if(isset($_REQUEST['err'])) { // gestione errori
                echo "<script>alert(";
                switch($_REQUEST['err']) {
                    case 1:
                        echo "'Saldo insufficente'";
                        break;
                    case 2:
                        echo "`La quantità dell'articolo " .$_REQUEST['articolo'] ." non è disponibile`";
                }
                echo ");</script>";
            }
            if(isset($_REQUEST['success'])) { // stampa successo
                echo "<script>alert(";
                switch($_REQUEST['success']) {
                    case 1:
                        echo "'Ordine completato con successo'";
                        break;
                }
                echo ");</script>";
            }
            $categoria = "";
            if(isset($_REQUEST['categoria'])) {
                $categoria = $_REQUEST['categoria'];
            } else {
                header("location: ../login.php?err=1");
                die();
            }
            $doc = new DOMDocument();
            $doc->load('../../XML/magazzino.xml');
            $tagCategoria = $doc->getElementsByTagName($categoria);
        ?>
    </head>
    <body style="margin: 0px;">
        <header>
            <div class="header">
                <div class="sezione"><a href="libri.php?user=<?php echo $_GET['user']; ?>&categoria=libri">LIBRI</a></div>
                <div class="sezione"><a href="#">TECNOLOGIA</a></div>
                <div class="sezione"><a href="film.php?user=<?php echo $_GET['user']; ?>&categoria=film">FILM</a></div>
                <div class="sezione"><a href="vestiti.php?user=<?php echo $_GET['user']; ?>&categoria=vestiti">VESTITI</a></div>
                <div class="sezione"><a href="sport.php?user=<?php echo $_GET['user']; ?>&categoria=sport">SPORT</a></div>
                <div id="pulsante_account"><a href="../account.php?user=<?php echo $_GET['user'];?>">ACCOUNT</a></div>
            </div>
        </header>
        <div class="container">
        <form action="ordina.php?user=<?php echo $_REQUEST['user'] . "&categoria=" . $categoria;?>" method="post">
                <?php
                    $i = 1;
                    foreach($tagCategoria as $t) {
                        $prodotti = $t->getElementsByTagName("prodotto");
                        foreach($prodotti as $p) {
                            $nome = $p->getElementsByTagName("nome")->item(0)->nodeValue;
                            $prezzo = $p->getElementsByTagName("prezzo")->item(0)->nodeValue;
                            $quantita = $p->getElementsByTagName("quantita")->item(0)->nodeValue;
                ?>
            <div class="articolo">
                <div class="immagine_articolo"><img src="../../Immagini/tecnologia/immaginiTecnologia<?php echo $i;?>.jpg" alt=""></div>
                <div class="descrizione_articolo"><h3 class="titolo"><?php echo $nome;?></h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                                                Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero.
                                                                                                Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor.
                                                                                                Donec consequat diam vitae nisl sagittis, in mollis ante varius.
                                                                                                Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor.
                                                                                                <br><input class="prezzo_articolo" type="text" name="prezzo_articolo<?php echo $i ?>" value="<?php echo $prezzo; ?>" readonly> <input type="text" class="disponibilita_articolo" name="quantita_max" value="max: <?php echo $quantita;?>" readonly></div>
                <div class="quantita_acquisto_articolo">
                    <div class="box_quantita">
                        <button class="bottone" type="button" onclick="aumenta(<?php echo $i - 1?>)">+</button>
                        <input type="text" name="quantita_articolo<?php echo $i?>" class="numero_quantita" min="0" max="10" value="0" readonly>
                        <button class="bottone" type="button" onclick="diminuisci(<?php echo $i - 1?>)">-</button>
                    </div>
                </div>
            </div>
            <?php
                        $i++;
                    }
                    break;
                }
            ?>
        </div>
        
            <footer>
                <div class="footer"><input name="submit" type="submit" value="ORDINA"><input type="text" name="prezzo_totale" id="prezzo_totale" value="0.00" readonly></div>
            </footer>
        </form>
    </body>
</html>