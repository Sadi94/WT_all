<?php
    require_once "Model/db_config.php";

    $name="";
    $err_name="";

    $uname="";
    $err_uname="";

    $email="";
    $err_email="";

    $number="";
    $err_number="";

    $pass="";
    $err_pass="";

    $confirm_pass="";
    $err_confirm_pass="";

    $has_error=false;
    
    if(isset($_POST["AddEmployee"])){
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

        if(empty($_POST["pass"])){
            $err_pass="[password required]";
            $has_error=true;
        }elseif(!validatePass($_POST["pass"])){
            $err_pass="**password must contain atleast 8 characters, 1 upper case, 1 lowercase & 1 special character(@/#) & No whitespaces**";
            $has_error=true;
        }else{
            $pass=htmlspecialchars($_POST["pass"]);
            
        if($_POST["pass"]==$_POST["confirm_pass"]){
                $confirm_pass=$_POST["pass"];
        }elseif(empty($_POST["confirm_pass"])){
            $err_confirm_pass="[Please re-insert password]";
            $has_error=true;
        }else{
            $err_confirm_pass="[pasword does not match]";
            $has_error=true;
        }
        }
        if(!$has_error){
            insertEmployee($name,$uname,$pass,$email,$number);
        }
        
    }

    if(isset($_POST["EditEmployee"])){
        updateEmployee($_POST["id"],$_POST["uname"],$_POST["name"],$_POST["email"],$_POST["phone"],$_POST["salary"]);
    }

    if(isset($_POST["approve"])){
        approveVacancy($_POST["id"],$_POST["usrrname"],$_POST["name"],$_POST["email"],$_POST["phone"]);
    }
    
    function insertEmployee($name,$username,$password,$email,$phone_no){
        $query = "INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`, `type`) VALUES (NULL, '$name', '$username', '$password', '$email', '$phone_no', 'employee');";
        execute($query);
        header("Location: AllEmployees.php");
    }

    function updateEmployee($id, $uname, $name, $email, $phone_no, $salary){
        $query = "UPDATE `users` SET `username` = '$uname', `name` = '$name', `email` = '$email', `phone` = '$phone_no', `salary` = '$salary'  WHERE `users`.`id` = $id;";
        execute($query);
        header("Location: AllEmployees.php");
    }

    function approveVacancy($id,$uname,$name,$email,$phone_no){
        $query = "UPDATE `users` SET `username` = '$uname', `name` = '$name', `email` = '$email', `phone` = '$phone_no', `phone` = '$phone_no', `type` = 'employee' WHERE `users`.`id` = $id;";
        execute($query);
        header("Location: AllEmployees.php");
    }

    function updatePass($id,$pass){
        $query = "update users set password='$pass' where id=$id";
        execute($query);
    }

    function getAllEmployees(){
        $query = "SELECT * FROM users WHERE type = 'employee'";
        $result = get($query);
        return $result;
    }

    function getEmployee($id){
        $query = "SELECT * FROM users WHERE type = 'employee' AND id =$id";
        $result = get($query);
        if(count($result) > 0){
            return $result[0]; 
        }
        return false; 
    }

    function getAllVacancies(){
        $query = "SELECT * FROM users WHERE type = 'vacancy'";
        $result = get($query);
        return $result;
    }

    function vacancyToEmployee(){
        
    }

    function validatePass($pass){
        $has_upper=false;
        $has_lower=false;
        $has_digit=false;
        for($i=0;$i<strlen($pass);$i++){
            if(ctype_upper($pass[$i])){
                $has_upper=true;
            }
            if(ctype_lower($pass[$i])){
                $has_lower=true;
            }
            if(ctype_digit($pass[$i])){
                $has_digit=true;
            }
        }

        if($has_upper==false || $has_lower==false || $has_digit==false){
            return false;
        }elseif(strlen($_POST["pass"])<8){
            return false;
        }elseif(strpos($_POST["pass"]," ")){
            return false;
        }elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?") && !strpos($_POST["pass"],"@")){
            return false;
        }else{
            return true;
        }
    }

    if(isset($_POST["changePass"]))
    {
        if(empty($_POST["pass"]))
        {
            $err_pass="**password required!**";
            $has_error=true;
        }
        elseif(!validatePass($_POST["pass"]))
        {
            $err_pass="**password must contain atleast 8 characters, 1 upper case, 1 lowercase & 1 special character(@/#) & No whitespaces**";
            $has_error=true;
        }
        else
        {
            $pass=htmlspecialchars($_POST["pass"]);
            if(!$has_error){
                session_start();
                $id = $_SESSION["id"];
                $_SESSION["password"] = $pass;
                updatePass($id,$pass);
            }
        }
    }

    function searchEmployee($key){
        $query = "SELECT 'id', 'name' FROM users WHERE 'name' LIKE '%$key%' AND 'type' = 'employee'";
        $result = get($query);
        return $result;
    }

?>