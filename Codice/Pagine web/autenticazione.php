<?php
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

    $utenti = $doc->getElementsByTagName('account'); // $utenti = {[Account][Account][Account][Account][...][Account]}
    foreach ($utenti as $u) { //$u [Account] -> $u [[user][pasw]]
        $user = $u->getElementsByTagName('user')->item(0)->nodeValue; //$user = {[user]->contenuto}
        $pasw = $u->getElementsByTagName('pasw')->item(0)->nodeValue; //$pasw = {[pasw]->contenuto}
        if($utente == $user && $password == $pasw){
            header("location: shop.php?user=$user");
            die();
        }
    }
    header("location: login.php?err=2");
    die();

?>