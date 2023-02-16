<?php
    if(!isSet($_REQUEST['registrati'])){
        //header("location: login.php?err=1");
        //die();
        echo "non hai inserito valori";
    } 
    
    //salvo utente e password dall'array associativo in variabili
    $utente = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    //definisco parametri xml
    $nome_file = "../XML/utenti.xml"; //percorso del file
    $dom = new DOMDocument(); //oggeto di classe DOMDocument per usare i metodi utili all'XML
    
    //intestazine xml
    $dom->encoding = 'utf-8';
    $dom->xmlVersion = '1.0';
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;

    //carico il documento se già esiste
    if(file_exists($nome_file)){
        $dom->load($nome_file);
    } 

    // codice di verifica utente già esistente
    $utenti = $dom->getElementsByTagName('account');
    foreach($utenti as $u) {
        $user = $u->getElementsByTagName('user')->item(0)->nodeValue;
        if($user ==  $utente) {
            header("location: registrati.php?err=1");
            die();
        }
    } 

    //creazione nuovo utente
    $account = $dom->createElement('account');
    $user = $dom->createElement('user', $utente);
    $pasw = $dom->createElement('pasw', $password);
    $account->appendChild($user);
    $account->appendChild($pasw);

    //salvo
    if(file_exists($nome_file)){
        $registro = $dom->getElementsByTagName('registro');
        $registro->item(0)->appendChild($account); 
        $dom->appendChild($registro->item(0));
    }else{
        $registro = $dom->createElement('registro');
        $registro->appendChild($account);
        $dom->appendChild($registro);
    }
    $dom->save($nome_file);


    header('Location: registrati.php');
    die();


?>