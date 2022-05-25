<?php
    require_once "Model/db_config.php";

    $name = "";
    $err_name = "";

    $uname = "";
    $err_uname = "";

    $email = "";
    $err_email = "";

    $phone = "";
    $err_phone = "";

    $newPass = "";
    $err_newPass = "";

    $conNewPass = "";
    $err_conNewPass = "";

    $has_error = false;
    $has_error2 = false;


function checkUser(){
    $uname = $_SESSION["user"];
    $query = "SELECT * FROM users WHERE username='$uname'";
    $result = get($query);
    if(!count($result) > 0){
        header("Location: logout.php");
    }
}
if(isset($_POST["updateDetails"])){
    if(empty($_POST["name"])){
        $err_name="[Name Requires]";
        $has_error=true;
    }else{
        $name=htmlspecialchars($_POST["name"]);
    }

    if(empty($_POST["uname"])){
        $err_uname="[Username Required]";
        $has_error=true;
    }elseif(strlen($_POST["uname"])<6){
        $err_uname="[Username must be 6 charachters long]";
        $has_error=true;
    }elseif(strpos($_POST["uname"]," ")){
        $err_uname="[Username should not contain white space]";
        $has_error=true;
    }else{
        $uname=htmlspecialchars($_POST["uname"]);
    }

    if(empty($_POST["email"])){
       $err_email="[Email required]";
       $has_error=true;
    }elseif(!strpos($_POST["email"],"@")){
       $err_email="[email must contain '@' sign]";
       $has_error=true;
    }else{
       $pos_at  = strpos($_POST["email"],"@");
        if(!strpos($_POST["email"],".",$pos_at)){
           $err_email="[at least one dot needed after '@' sign]";
           $has_error=true;
        }else{
            $email=htmlspecialchars($_POST["email"]);
        }    
    }

    if(empty($_POST["phone"])){
        $err_number="[Number Required]";
        $has_error=true;
    }elseif(!is_numeric($_POST["phone"])){
        $err_number="[number should only contain neumeric value]";
        $has_error=true;
    }else{
        $number=htmlspecialchars($_POST["phone"]);
    }

    if($has_error = false){
        session_start();
        $id = $_SESSION["id"];
        $_SESSION["name"] = $name;
        if(checkUsername($uname)){
            $_SESSION["user"] = $uname;
        }
        $_SESSION["email"] = $email;
        $_SESSION["phoneNo"] = $number;
        updateManager($id,$name,$uname,$email,$number);
    }
}


if(isset($_POST["changePassword"])){

    if(empty($_POST["newPass"])){
        $err_newPass="[Password Requires]";
        $has_error2 = true;
    }else{
        $newPass=htmlspecialchars($_POST["newPass"]);
    }

    if(empty($_POST["conNewPass"])){
        $err_conNewPass="[Password Requires]";
        $has_error2 = true;
    }elseif($_POST["conNewPass"] != $_POST["newPass"]){
        $err_conNewPass="[Not meatching]";
        $has_error2 = true;
    }else{
        $conNewPass=htmlspecialchars($_POST["conNewPass"]);
    }

    $id = $_SESSION["id"];

    if($has_error2 = false){
        changePassword($id,$newPass);
    }
}

function updateManager($id,$name,$uname,$email,$number){
    $query = "UPDATE `users` SET `name` = '$name', `username` = '$uname', `email` = '$email', `phone` = '$number' WHERE `users`.`id` = $id;";
    execute($query);
    header("Location: ManagerDashboard.php");
}

function changePassword($id,$newPass){
    $query = "UPDATE `users` SET `password` = '$newPass' WHERE `users`.`id` = $id;";

}

?>