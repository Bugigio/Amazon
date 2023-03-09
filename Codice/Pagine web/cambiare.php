<?php
    if(isset($_POST['submit'])) {
        session_start();
        $_SESSION['passwErr'] = 0;
        session_unset();
        $user = $_POST['user'];
        $passwordNuova = $_POST['passwordNuova'];
        $confermaPassword = $_POST['confermaPassword'];

        // ricerca file "username".xml
        $usernameXML = new DOMDocument();
        try {
            $usernameXML->load("../XML/utenti/$user.xml");
        } catch (\Throwable $th) {
            header("location: cambiaPassword.php?err=1&user=$user");
            die();
        }
        // controllo password
        if($passwordNuova == $confermaPassword) {
            $doc = new DOMDocument();
            $doc->load('../XML/utenti.xml'); // ricerca utente in utenti.xml
            $utenti = $doc->getElementsByTagName('account'); // array degli account
            foreach($utenti as $u) {
                $username = $u->getElementsByTagName('user')->item(0)->nodeValue;
                if($username == $user) { 
                    $u->getElementsByTagName('pasw')->item(0)->nodeValue = $passwordNuova; // cambia la password in utenti.xml
                    $usernameXML->getElementsByTagName('password')->item(0)->nodeValue = $passwordNuova; // cambia la password in "username".xml
                    $doc->save("../XML/utenti.xml");
                    $usernameXML->save("../XML/utenti/$user.xml");
                    header("location: login.php?passwChanged=true");
                    die();
                }
            }
        } else {
            header("location: cambiaPassword.php?err=2&user=$user");
        }

    } else {
        header("location: login.php?err=1");
        die();
    }
?>