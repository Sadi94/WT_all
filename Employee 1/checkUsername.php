<?php
   
   require_once "CONTROLLER/registrationController.php";
   $username=$_GET["uname"];
   $rs=checkUsername($username);
   if($rs)
   {
     echo "true";
   }
   else{

     echo "false";
   }	
   
?>

