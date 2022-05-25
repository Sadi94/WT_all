<?php
include('../model/connection.php'); 

 $error="";
// store session data
if (isset($_POST['submit'])) {

if (empty($_POST['pid']) || empty($_POST['vid'])) {
	// echo 'hello';
$error = "Invalid info";
}
else
{

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->InsertvenUser($conobj,"assignven",$_POST['pid'],$_POST['vid']);

if ($userQuery== True) {

	echo '<script> alert ("Successfully Assigned vendor")</script>';

   }
 else {
$error = "invalid info";
}
$connection->CloseCon($conobj);

}

}


?>
<!-- Warning: Attempt to read property "num_rows" on bool in C:\xampp\htdocs\amardhaka\control\emprprocess.php on line 23 -->
