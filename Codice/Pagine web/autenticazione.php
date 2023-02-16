<?php
    session_start();
    if(!isSet($_REQUEST['login'])) header("location: login.php?err=1");
    $utente = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    //controllo se l'utente esiste
    $nome_file = "../XML/utenti.xml";
    if(!file_exists($nome_file)){
        header("location: login.php?err=4");
        die();
    } 

    $doc = new DOMDocument();
    $doc->load('../XML/utenti.xml');// use the actual file path. Absolute or relative

    if($utente != $_SESSION['userPre']) { // reset tentativi password se utente è cambiato
        $_SESSION['passwErr'] = 0;
        $_SESSION['userPre'] = $utente;
    }
    $utenti = $doc->getElementsByTagName('account'); // $utenti = {[Account][Account][Account][Account][...][Account]}
    foreach ($utenti as $u) { //$u [Account] -> $u [[user][pasw]]
        $user = $u->getElementsByTagName('user')->item(0)->nodeValue; //$user = {[user]->contenuto}
        $pasw = $u->getElementsByTagName('pasw')->item(0)->nodeValue; //$pasw = {[pasw]->contenuto}
        if($utente == $user) {
            if($password == $pasw) {
                header("location: shop.php?user=$user");
                die();
            } else {
                $_SESSION['passwErr']++; // tentativi falliti incrementati
                if($_SESSION['passwErr'] >= 3) {
                    // Password sbagliata, cambia password
                    header("location: login.php?err=6&user=$utente");
                    die();
                } else {
                    // Password sbagliata
                    header("location: login.php?err=5");
                    die();
                }
            }

        }
    }
    // Utente inesistente
    header("location: login.php?err=2");
    die();


?>