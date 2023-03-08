<?php
    if(isset($_REQUEST['user']) && isset($_POST['submit'])) {
        print_r($_POST);
        $magazzino = new DOMDocument();
        $magazzino->load("../XML/magazzino.xml");
        $usernameXML = new DOMDocument();
        $usernameXML->load($_REQUEST['user'] . ".xml");
        // verifica saldo disponibile
        if($usernameXML->getElementsByTagName("saldo")->item(0)->nodeValue < $_REQUEST['prezzo_totale']) {
            header("location: " . $_REQUEST['categoria'] . ".php?user=" . $_REQUEST['user'] . "&categoria=". $_REQUEST['categoria'] . "&err=1");
            die();
        }
        $tagCategoria = $magazzino->getElementsByTagName($_REQUEST['categoria']);
        $indice_prodotto = 1;
        foreach($tagCategoria as $t) {
            $prodotto = $t->getElementsByTagName("prodotto")->getElementsByTagName("quantita")->nodeValue;
            if($_REQUEST["quantita_articolo$indice_prodotto"] > 0) {
                if($_REQUEST["quantita_articolo$indice_prodotto"] > $prodotto) {
                    header("location: " . $_REQUEST['categoria'] . ".php?user=" . $_REQUEST['user'] . "&categoria=". $_REQUEST['categoria'] . "&err=2");
                }
            }
        }
    } else {
        header("location: login.php?err=1");
    }
?>