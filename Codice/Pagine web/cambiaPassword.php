<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cambia Password</title>
        <link rel="stylesheet" href="../Stili/style.css">
    </head>
    <body>
        <?php
            if(!isset($_GET['user'])) {
                header("location: login.php");
            }
        ?>
        <form action="cambiare.php" method="post">
            <h1>Cambia password</h1>
            <input type="text" name="user" placeholder="Nome utente" value="<?php echo $_GET['user'];?>" required>
            <input type="text" name="passwordNuova" placeholder="Nuova password">
            <input type="password" name="confermaPassword" placeholder="Conferma password">
            <input type="submit" name="submit" value="Conferma">
        </form>
    </body>
</html>