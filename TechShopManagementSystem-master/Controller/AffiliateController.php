<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: Login.php");
    }
    $err_company="";
    $err_website="";
    $err_tax_id="";
    $err_payee="";
    $has_error=false;

    if($_POST["submitAffiliate"]){
        if(empty($_POST["company"])){
            $err_company="Provide Your Company Name";
            $has_error=true;
        }
        if(empty($_POST["website"])){
            $err_website="Provide Your Website Address";
            $has_error=true;
        }
        if(empty($_POST["tax_id"])){
            $err_tax_id="Enter Tax ID";
            $has_error=true;
        }
        elseif(!ctype_digit($_POST["tax_id"])){
            $err_tax_id="Invalid Entry";
            $has_error=true;
        }
        if(empty($_POST["payee"])){
            $err_payee="Cheque Payee Name Required!";
            $has_error=true;
        }

        if(!$has_error){
            header("Location: MyAccount.php");
        }
    }
?>