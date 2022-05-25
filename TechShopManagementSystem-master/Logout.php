<?php 
    session_start();
    unset($_SESSION["name"]);
    unset($_SESSION["user"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["id"]);
    unset($_SESSION["email"]);
    unset($_SESSION["type"]);
    setcookie("user", "", time() - 3600);
    header("Location: index.php");
?>