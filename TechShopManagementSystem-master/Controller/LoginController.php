<?php
    require_once "Model/db_config.php";
    $uname="";
    $pass="";
    $err_pass="";
    $err_uname="";

    function authenticateUser()
    {
        global $uname,$pass,$err_pass,$err_uname;
        $query = "select * from users where username='$uname'";
        $result = get($query);
        if(count($result) > 0){
            $user = $result[0];
            if($user["password"] == $pass){
                session_start();
                $_SESSION["user"] = $user["username"];
                $_SESSION["type"] = $user["type"];
                $_SESSION["id"] = $user["id"];
                $_SESSION["password"] = $user["password"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["phoneNo"] = $user["phone"];
                $_SESSION["name"] = $user["name"];
                if($_SESSION["type"] == "admin"){
                    setcookie("user",$_SESSION["user"],time()+3600,"/");
                    header("Location: AdminDashboard.php");
                }elseif ($_SESSION["type"] == "manager") {
                    setcookie("user",$_SESSION["user"],time()+3600,"/");
                    header("Location: ManagerDashboard.php");
                }elseif ($_SESSION["type"] == "employee") {
                    setcookie("user",$_SESSION["user"],time()+3600,"/");
                    header("Location: EmployeeHeader.php");
                }else{
                    header("Location: index.php");
                }
            }
            else{
                $err_pass = "Password Incorrect.";
                $pass="";
                
            }
        }
        else{
            $uname="";
            $pass="";
            $err_uname= "Username does not match!";
        }
    }

    if(isset($_POST["login"])){
        $uname = htmlspecialchars($_POST["uname"]);
        $pass = htmlspecialchars($_POST["pass"]);
        authenticateUser();
    }

    function checkUser(){
        $uname = $_SESSION["user"];
        $query = "select * from users where username='$uname'";
        $result = get($query);
        if(!count($result) > 0)
        {
            header("Location: Logout.php");
        }
    }

?>
