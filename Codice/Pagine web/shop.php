<?php
    if(!isSet($_REQUEST['user'])){
        header("location: login.php?err=1");
        die();
    }
?>
<html>
    <head>
        <title>Login con i file</title>
        <link rel=stylesheet href="../Stili/style.css"></style>
    </head>
    <body>
        <div>benvenuto <?php echo $_REQUEST['user'];?></div>
    </body>
</html>