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
    $has_error=false;
	
	function getUser($id){
       $query = "SELECT * FROM `user` WHERE `id`='$id'";
		
        $result = get($query);
        if(count($result) > 0){
            return $result[0];
        }
        return false; 
      }
	
    function updateUser($name,$uname,$email,$number,$id){
		$query="UPDATE `user` SET `name`= '$name' ,`username`='$uname',`email`='$email',`phone`='$number' WHERE id='$id' ";  
        execute($query);
    }

     if(isset($_POST["updateDetails"]))
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
            updateUser($name,$uname,$email,$number,$_POST["id"]);
			header("Location:MyAccountEmployee.php");
        }
	 }
?>
