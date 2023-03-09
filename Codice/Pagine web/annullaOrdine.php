<?php 
    if(!isset($_REQUEST['user'])) {
        header("location: login.php?err=1");
        die();
    }
    // caricamento username.xml
    $magazzino = new DOMDocument();
    $magazzino->encoding = 'utf-8';
    $magazzino->xmlVersion = '1.0';
    $magazzino->preserveWhiteSpace = false;
    $magazzino->formatOutput = true;
    $magazzino->load("../XML/magazzino.xml");

    // caricamento magazzino.xml
    $usernameXML = new DOMDocument();
    $usernameXML->encoding = 'utf-8';
    $usernameXML->xmlVersion = '1.0';
    $usernameXML->preserveWhiteSpace = false;
    $usernameXML->formatOutput = true;
    $usernameXML->load("../XML/utenti/" . $_REQUEST['user'] . ".xml");

    // trovo ordine da annullare
    $ordine_da_annullare = $usernameXML->getElementsByTagName("prodotto")->item($_REQUEST['articolo']);
    $nome = $usernameXML->getElementsByTagName("nome")->item($_REQUEST['articolo'] + 1)->nodeValue;
    $quantita = $usernameXML->getElementsByTagName("quantita")->item($_REQUEST['articolo'])->nodeValue;
    $prezzo = $usernameXML->getElementsByTagName("prezzo")->item($_REQUEST['articolo'])->nodeValue;
    echo $nome . $quantita . $prezzo;
    // cerco il relativo articolo nel magazzino
    $prodotti = $magazzino->getElementsByTagName("prodotto");
    foreach($prodotti as $p) {
        if($p->getElementsByTagName("nome")->item(0)->nodeValue == $nome) {
            $p->getElementsByTagName("quantita")->item(0)->nodeValue += $quantita;
        }
    }

    // ricarico il saldo dell'utente
    $usernameXML->getElementsByTagName("saldo")->item(0)->nodeValue += $prezzo;
    
    // rimozione dagli ordini l'ordine annullato
    $usernameXML->getElementsByTagName("ordini")->item(0)->removeChild($ordine_da_annullare);

    $usernameXML->schemaValidate("../XSD/username.xsd");
    $magazzino->schemaValidate("../XSD/magazzino.xsd");
    $usernameXML->save("../XML/utenti/" . $_REQUEST['user'] . ".xml");
    $magazzino->save("../XML/magazzino.xml");
    header("location: account.php?user=" . $_REQUEST['user'] . "&aO=1");
    die();
?>