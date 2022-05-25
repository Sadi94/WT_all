<?php
    require_once "Controller/RegistrationController.php";
    session_start();
    $username = $_GET["uname"];
    $rs = checkUsername($username);
    if($rs){
        echo "true";
    }
    else{
        if($_SESSION['user'] != $username){
            echo "false";
        }else
            echo "true";
    }
?>