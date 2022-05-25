<?php
    require_once "MODEL/db_config.php";
    $uname="";
    $pass="";
    $err_pass="";
    $err_uname="";
	$has_error=false;
	

    function authenticateUser()
    {
        global $uname,$pass,$err_pass,$err_uname;
        $query = "select * from user where username='$uname'";
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

                if ($_SESSION["type"] == "employee") {
					setcookie("user",$user["username"],time()+2000,"/");
                    header("Location: Employee_header.php");
                }else{
                    header("Location: login.php");
                }
            }
            else{
                $err_pass = "Password Incorrect.";
              
                
            }
        }
        else
        {
            
            $err_uname= "**username does not match!**";
        }
    }

    if(isset($_POST["login"]))
    {
		
		if(empty($_POST["uname"]) && empty($_POST["pass"]))
         {
             $err_uname="[Name Requires]";
			 $err_pass="[Password Requires]";
             $has_error=true;
         }else if(empty($_POST["uname"])){
		     
			 $err_uname="[Name Requires]";			
             $has_error=true;
		 
		 }else if(empty($_POST["pass"])){
			 
			 $err_pass="[Password Requires]";
             $has_error=true;
		 }else{
            $uname = htmlspecialchars($_POST["uname"]);
            $pass = htmlspecialchars($_POST["pass"]);
			 authenticateUser();
		 }
		
    }
?>
      
		