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
    </head>
    <body style="margin: 0px;">
        <header>
            <div class="header">
                <div class="sezione"><a href="#">LIBRI</a></div><div class="sezione"><a href="#">TECNOLOGIA</a></div><div class="sezione"><a href="#">FILM</a></div><div class="sezione"><a href="#">VESTITI</a></div><div class="sezione"><a href="#">SPORT</a></div><div id="pulsante_account"><a href="#">ACCOUNT</a></div>
            </div>
        </header>
        <div class="container">
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div>
                        <button class="bottone" onclick="aumenta(0)">+</button>
                        <div class="numero_quantita">0</div>
                        <button class="bottone" onclick="diminuisci(0)">-</button>
                    </div>
                </div>
            </div>
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div>
                        <button class="bottone" onclick="aumenta(1)">+</button>
                        <div class="numero_quantita">0</div>
                        <button class="bottone" onclick="diminuisci(1)">-</button>
                    </div>
                </div>
            </div>
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div>
                        <button class="bottone" onclick="aumenta(2)">+</button>
                        <div class="numero_quantita">0</div>
                        <button class="bottone" onclick="diminuisci(2)">-</button>
                    </div>
                </div>
            </div>
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div>
                        <button class="bottone" onclick="aumenta(3)">+</button>
                        <div class="numero_quantita">0</div>
                        <button class="bottone" onclick="diminuisci(3)">-</button>
                    </div>
                </div>
            </div>
            <div class="articolo">
                <div class="immagine_articolo"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <div class="descrizione_articolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur, ex id ultricies ultricies, metus mauris ultrices nisl, vitae volutpat felis odio in libero. Sed dapibus nec elit quis pulvinar. In faucibus nisl ac fermentum egestas. Quisque hendrerit nibh in velit faucibus tempor. Donec consequat diam vitae nisl sagittis, in mollis ante varius. Suspendisse vestibulum pretium massa, ut tristique lorem laoreet non. Nullam at mi ut turpis fermentum feugiat eget sodales tortor. Integer rhoncus dolor ut ante hendrerit feugiat.</div>
                <div class="quantita_acquisto_articolo">
                    <div>
                        <button class="bottone" onclick="aumenta(4)">+</button>
                        <div class="numero_quantita">0</div>
                        <button class="bottone" onclick="diminuisci(4)">-</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">ciao</div>
        </footer>
    </body>
</html>