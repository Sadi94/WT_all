<?php
include('../model/adb.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['aid']) || empty($_POST['pass'])) {
$error = "aid or pass is invalid1";
}
else
{
$aid = $_POST['aid'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->register($conobj,"admin",$aid,$pass,$name,$email,$phone);

if ($userQuery===true) {
//$_SESSION["aid"] = $aid;
//$_SESSION["pass"] = $pass;
   echo "done";
//header("location: view/adminl.php");

   }
 else {
$error = "aid or pass is invalid2";
}
$connection->CloseCon($conobj);

}
}


?>
