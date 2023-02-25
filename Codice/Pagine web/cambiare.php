<?php
    if(isset($_POST['submit'])) {
        $user = $_POST['user'];
        $passwordNuova = $_POST['passwordNuova'];
        $confermaPassword = $_POST['confermaPassword'];
        if($passwordNuova == $confermaPassword) {
            // trovo il documento xml
            $doc = new DOMDocument();
            $doc->load('../XML/utenti.xml'); // ricerca utente in utenti.xml
            $utenti = $doc->getElementsByTagName('account'); // array degli account
            foreach($utenti as $u) {
                $username = $u->getElementsByTagName('user')->item(0)->nodeValue;
                $password = $u->getElementsByTagName('pasw')->item(0)->nodeValue;
                if($user == $username) {
                    $password = $passwordNuova;
                    // ricerca file "username".xml
                    $usernameXML = new DOMDocument();
                    $usernameXML->load("../XML/utenti/$user.xml");
                    header("location: login.php?passwChanged=true");
                    die();
                }
            }
            header("location: cambiaPassword.php?err=1&user=$user");
            die();
        } else {
            header("location: cambiaPassword.php?err=2&user=$user");
            die();
        }
    }
?>