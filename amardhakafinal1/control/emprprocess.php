<?php
include('../model/connection.php'); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['eid']) || empty($_POST['deg'])|| empty($_POST['password'])|| empty($_POST['phone'])|| empty($_POST['nid'])) {
$error = "Invalid info";
}
else
{

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->InsertUser($conobj,"emp",$_POST['eid'],$_POST['deg'],$_POST['password'],$_POST["phone"],$_POST['nid']);

if ($userQuery== True) {

	echo '<script> alert ("Employee successfully registered")</script>';

   }
 else {
$error = "invalid info";
}
$connection->CloseCon($conobj);

}

}


?>
<!-- Warning: Attempt to read property "num_rows" on bool in C:\xampp\htdocs\amardhaka\control\emprprocess.php on line 23 -->
