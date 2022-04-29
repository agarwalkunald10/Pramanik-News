<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location:../Database/login.php");
        exit();
    }
?>