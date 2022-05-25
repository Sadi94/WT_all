<?php
   require_once "MODEL/db_config.php";

    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $email="";
    $err_email="";
    $number="";
    $err_number="";
    $has_error=false;
	
	
	
    	
	
   function insertUser($name,$username,$password,$email,$phone_no){
        $query = "INSERT INTO `user`(`id`, `name`, `username`, `password`, `email`, `phone`, `type`) VALUES (null,'$name','$username','$password','$email','$phone_no','non_custromer')";
        execute($query);
		header("Location: login.php");
	
    }
    
	function checkUsername($username){
		$query="SELECT * FROM `user` WHERE 'username'='$username'";
		$result=get($query);
		if(count($result)>0){
			return false;
		}
		
		return true;
		
	}
	
	
    if(isset($_POST["register"]))
	 {
         if(empty($_POST["name"]))
         {
             $err_name="[Name Requires]";
             $has_error=true;
         }
         else
         {
             $name=htmlspecialchars($_POST["name"]);
         }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
             $has_error=true;
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
             $has_error=true;
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
             $has_error=true;
		 }
		 else
		 {
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
             $has_error=true;
		 }
        elseif(strlen($_POST["pass"])<8)
        {
             $err_pass="[password must be at least 8 characters long]";
             $has_error=true;
        }
		elseif(strpos($_POST["pass"]," "))
        {
                $err_pass="[Password should not contain white space]";
                $has_error=true;
        }
        elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?") && !strpos($_POST["pass"],"@"))
        {
                $err_pass="[Password should contain at least one special character]";
                $has_error=true;
        }
        else
		{
            $u=0; $l=0; $d=0;
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_upper($_POST["pass"][$i]))
                {
                    $u=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_lower($_POST["pass"][$i]))
                {
                    $l=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_digit($_POST["pass"][$i]))
                {
                    $d=1;
                    break;
                }
            }
            if(!$u==1 || !$l==1 || !$d==1)
            {
                $err_pass="[must have at least one upper case, one lower case & one numeric value]";
                $has_error=true;
            }
            else
            {
                $pass=htmlspecialchars($_POST["pass"]);
                if($_POST["pass"]==$_POST["confirm_pass"])
                {
                    $confirm_pass=$_POST["pass"];
                }
                elseif(empty($_POST["confirm_pass"]))
                {
                    $err_confirm_pass="[Please re-insert password]";
                    $has_error=true;
                }
                else
                {
                    $err_confirm_pass="[pasword does not match]";
                    $has_error=true;
                }
            }
		}
        if(empty($_POST["email"]))
        {
            $err_email="[Email required]";
            $has_error=true;
        }
        elseif(!strpos($_POST["email"],"@"))
        {
            $err_email="[email must contain '@' sign]";
            $has_error=true;
        }
        else
        {
            $pos_at  = strpos($_POST["email"],"@");
            if(!strpos($_POST["email"],".",$pos_at))
            {
                $err_email="[at least one dot needed after '@' sign]";
                $has_error=true;
            }
            else
            {
                $email=htmlspecialchars($_POST["email"]);
            }
             
         }
         if(empty($_POST["phone"]))
         {
             $err_number="[Number Required]";
             $has_error=true;
         }
         elseif(!is_numeric($_POST["phone"]))
         {
             $err_number="[number should only contain neumeric value]";
             $has_error=true;
         }
         else
         {
             $number=htmlspecialchars($_POST["phone"]);
         }
        if(!$has_error)
        {
           
            insertUser($name,$uname,$pass,$email,$number);
            
            
        
		}
	 }
	 
?>