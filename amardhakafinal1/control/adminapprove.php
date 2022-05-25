<?php
include('../model/adb1.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['aid'])) {
$error = "aid is invalid";
}
else
{
$aid = $_POST['aid'];


$connection = new db1();
$conobj=$connection->OpenCon1();

$userQuery=$connection->approve($conobj,"admin",$aid);

if ($userQuery===true) {

   echo "done";

   }
 else {
$error = "aid or pass is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
