<?php
    if(isset($_REQUEST['user']) && isset($_POST['submit'])) {
        print_r($_POST);
        $magazzino = new DOMDocument();
        $magazzino->load("../../XML/magazzino.xml");
        $usernameXML = new DOMDocument();
        $usernameXML->load("../../XML/utenti/" . $_REQUEST['user'] . ".xml");
        // verifica saldo disponibile
        echo $usernameXML->getElementsByTagName("saldo")->item(0)->nodeValue;
        if($usernameXML->getElementsByTagName("saldo")->item(0)->nodeValue < $_REQUEST['prezzo_totale']) {
            header("location: " . $_REQUEST['categoria'] . ".php?user=" . $_REQUEST['user'] . "&categoria=". $_REQUEST['categoria'] . "&err=1");
            die();
        }
        $tagCategoria = $magazzino->getElementsByTagName($_REQUEST['categoria']);
        $indice_prodotto = 1;
        foreach($tagCategoria as $t) { // scorriamo le categorie
            $prodotto = $t->getElementsByTagName("prodotto"); // prendo i tag prodotto
            foreach($prodotto as $p) { // scorro i prodotti della categoria
                $quantita = $p->getElementsByTagName("quantita")->item(0)->nodeValue; // quantita del prodotto $indice_prodotto
                if($_REQUEST["quantita_articolo$indice_prodotto"] > 0) {
                    if($_REQUEST["quantita_articolo$indice_prodotto"] > $quantita) { // quantita scelta non disponibile
                        header("location: " . $_REQUEST['categoria'] . ".php?user=" . $_REQUEST['user'] . "&categoria=". $_REQUEST['categoria'] . "&err=2&articolo=" . $p->getElementsByTagName("nome")->item(0)->nodeValue);
                        die();
                    }
                    $p->getElementsByTagName("quantita")->item(0)->nodeValue -= $_REQUEST["quantita_articolo$indice_prodotto"];
                }
                $indice_prodotto++;
            }
            break;
        }
        $usernameXML->getElementsByTagName("saldo")->item(0)->nodeValue -= $_REQUEST['prezzo_totale']; // sottrazione saldo all'account
        // validazione e salvataggio
        $usernameXML->schemaValidate("../../XSD/username.xsd");
        $magazzino->schemaValidate("../../XSD/magazzino.xsd");
        $usernameXML->save("../../XML/utenti/" . $_REQUEST['user'] . ".xml");
        $magazzino->save("../../XML/magazzino.xml");
        header("location: " . $_REQUEST['categoria'] . ".php?user=" . $_REQUEST['user'] . "&categoria=" . $_REQUEST['categoria']);
        die();
    } else {
        header("location: login.php?err=1");
    }
?>