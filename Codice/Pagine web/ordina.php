<?php
    if(isset($_REQUEST['user']) && isset($_POST['submit'])) {
        print_r($_POST);
    } else {
        header("location: login.php?err=1");
    }
?>