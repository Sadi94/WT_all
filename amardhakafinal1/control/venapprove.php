<?php
include('../model/adb1.php');
//session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['vid'])) {
$error = "vid is invalid";
}
else
{
$vid = $_POST['vid'];


$connection = new db1();
$conobj=$connection->OpenCon1();

$userQuery=$connection->approveven($conobj,"ven",$vid);

if ($userQuery===true) {
//$_SESSION["vid"] = $vid;
//$_SESSION["pass"] = $pass;
   echo "done";
//header("location: view/adminl.php");

   }
 else {
$error = "id is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
