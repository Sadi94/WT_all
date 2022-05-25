<?php
include('../model/so.php');
session_start();

$err="";

if(isset($_POST["submit"]))
{
    if(empty($_POST["email"]))
    {
         $err="enter the value";
    }
    else
    {
        $email=$_POST['email'];
$password=$_POST['password'];

$connection = new pa();
$conobj=$connection->strt();

$userQuery=$connection->check($conobj,"storeowner",$email,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
header("loction:../view/storeDashboard.php");

   }
 else {
$err = "Username or Password is invalid";
}
        $connection->CloseCon($conobj);
    }
}
?>