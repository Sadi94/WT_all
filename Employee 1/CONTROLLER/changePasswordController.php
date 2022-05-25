<?php
    require_once "MODEL/db_config.php";

    $pass="";
    $err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $has_error=false;
	
	
	function updatePass($pass,$id)
    {
        $query = "update user set password='$pass' WHERE id='$id'";
        execute($query);
    }
	
if(isset($_POST["changePass"]))
    {
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
        if(!$has_error)
        {
            updatePass($pass,$_POST["id"]);
			header("Location:MyAccount.php");
        }
    }
?>