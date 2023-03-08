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

    // creazione file "username.xml"
    $usernameXML = new DOMDocument();
    $usernameXML->encoding = 'utf-8';
    $usernameXML->xmlVersion = '1.0';
    $usernameXML->preserveWhiteSpace = false;
    $usernameXML->formatOutput = true;
    $nome_fileXML = "../XML/utenti/$utente.xml";
    
    // parte di dati utente
    $tagUtente = $usernameXML->createElement('utente');
    $tagDati = $usernameXML->createElement('dati');
    $tagNome = $usernameXML->createElement('nome', $utente);
    $tagPassword = $usernameXML->createElement('password', $password);
    $tagSaldo = $usernameXML->createElement('saldo', 0);
    $tagDati->appendChild($tagNome);
    $tagDati->appendChild($tagPassword);
    $tagDati->appendChild($tagSaldo);
    $tagUtente->appendChild($tagDati);

    // parte di dati ordini
    $tagOrdini = $usernameXML->createElement('ordini');
    $tagLibri = $usernameXML->createElement('libri', " ");
    $tagOrdini->appendChild($tagLibri);
    $tagTecnologia = $usernameXML->createElement('tecnologia', " ");
    $tagOrdini->appendChild($tagTecnologia);
    $tagFilm = $usernameXML->createElement('film', " ");
    $tagOrdini->appendChild($tagFilm);
    $tagVestiti = $usernameXML->createElement('vestiti', " ");
    $tagOrdini->appendChild($tagVestiti);
    $tagSport = $usernameXML->createElement('sport', " ");
    $tagOrdini->appendChild($tagSport);
    $tagUtente->appendChild($tagOrdini);
    $usernameXML->appendChild($tagUtente);
    $usernameXML->schemaValidate("../XSD/username.xsd");
    $usernameXML->save($nome_fileXML);


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
    $dom->schemaValidate("../XSD/utenti.xsd");
    $dom->save($nome_file);

    header('Location: registrati.php');
    die();


?>