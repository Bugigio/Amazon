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
        <script src="shop.js"></script>
        <?php
            if(isset($_REQUEST['user'])) {
                $doc = new DOMDocument();
                $doc->load('../XML/magazzino.xml');
                $prodotti = $doc->getElementsByTagName("prodotto");
            } else {
                header('location: login.php?err=1');
            }
        ?>
    </head>
    <body style="margin: 0px;">
        <header>
            <div class="header">
                <div class="sezione"><a href="#">LIBRI</a></div><div class="sezione"><a href="tecnologia.php?user=<?php echo $_GET['user']; ?>&categoria=tecnologia">TECNOLOGIA</a></div><div class="sezione"><a href="film.php?user=<?php echo $_GET['user']; ?>&categoria=film"">FILM</a></div><div class="sezione"><a href="vestiti.php?user=<?php echo $_GET['user']; ?>&categoria=vestiti">VESTITI</a></div><div class="sezione"><a href="sport.php?user=<?php echo $_GET['user']; ?>&categoria=sport">SPORT</a></div><div id="pulsante_account"><a href="account.php?user=<?php echo $_GET['user'];?>">ACCOUNT</a></div>
            </div>
        </header>
        <div class="container">
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div class="box_quantita">
                        <button class="bottone" onclick="aumenta(0)">+</button>
                        <input type="text" name="quantita" class="numero_quantita" min="0" max="10" value="0" readonly>
                        <button class="bottone" onclick="diminuisci(0)">-</button>
                    </div>
                </div>
            </div>
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div class="box_quantita">
                        <button class="bottone" onclick="aumenta(1)">+</button>
                        <input type="text" name="quantita" class="numero_quantita" min="0" max="10" value="0" readonly>
                        <button class="bottone" onclick="diminuisci(1)">-</button>
                    </div>
                </div>
            </div>
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div class="box_quantita">
                        <button class="bottone" onclick="aumenta(2)">+</button>
                        <input type="text" name="quantita" class="numero_quantita" min="0" max="10" value="0" readonly>
                        <button class="bottone" onclick="diminuisci(2)">-</button>
                    </div>
                </div>
            </div>
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div class="box_quantita">
                        <button class="bottone" onclick="aumenta(3)">+</button>
                        <input type="text" name="quantita" class="numero_quantita" min="0" max="10" value="0" readonly>
                        <button class="bottone" onclick="diminuisci(3)">-</button>
                    </div>
                </div>
            </div>
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div class="box_quantita">
                        <button class="bottone" onclick="aumenta(4)">+</button>
                        <input type="text" name="quantita" class="numero_quantita" min="0" max="10" value="0" readonly>
                        <button class="bottone" onclick="diminuisci(4)">-</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer"><a href="login.php"><button class="ordina"><h2>ORDINA</h2></button></a></div>
        </footer>
    </body>
</html>