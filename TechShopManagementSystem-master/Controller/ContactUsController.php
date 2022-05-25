<?php
    require_once "Model/db_config.php";
    $name="";
    $err_name="";
    $email="";
    $err_email="";
    $topic="";
    $err_topic="";
    $message="";
    $err_message="";
    $has_error=false;

    //Insert Contact Function
    function insertContact($name,$email,$topic,$message){
        $query = "insert into contacts values (null,'$name','$email','$topic','$message')";
        execute($query);
    }

    //Email Validation Function
    function validateEmail($email){
        if(!strpos($email,"@")){
            return false;
        }else{
            $pos_at = strpos($email,"@");
            if(!strpos($email,".",$pos_at)){
                return false;
            }else{
                return true;
            }
        }
    }


    if(isset($_POST["contact_us"])){
        //Name Validation
        if(empty($_POST["name"])){
            $err_name="**Name Required**";
            $has_error=true;
        }else{
            $name=htmlspecialchars($_POST["name"]);
        }

        //Email validation Block
        if(empty($_POST["email"])){
            $err_email="**Email required**";
            $has_error=true;
        }elseif(!validateEmail($_POST["email"])){
            $err_email="**Not a valid email**";
            $has_error=true;
        }else{
            $email = htmlspecialchars($_POST["email"]);
        }

        //Topic Validation Block
        if(!isset($_POST["topic"])){
            $err_topic = "**Please Select a topic**";
            $has_error = true;
        }else{
            $topic = htmlspecialchars($_POST["topic"]);
        }

        //Message Validation Block
        if(empty($_POST["message"])){
            $err_message="**Please fill up message box**";
            $has_error=true;
        }else{
            $message = htmlspecialchars($_POST["message"]);
        }

        //Insert after validation Block
        if(!$has_error){
            insertContact($name,$email,$topic,$message);
        }
    }
?>