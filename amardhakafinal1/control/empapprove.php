<?php
include('../model/adb1.php');
//session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['eid'])) {
$error = "eid is invalid";
}
else
{
$eid = $_POST['eid'];


$connection = new db1();
$conobj=$connection->OpenCon1();

$userQuery=$connection->approveemp($conobj,"emp",$eid);

if ($userQuery===true) {
//$_SESSION["eid"] = $eid;
//$_SESSION["pass"] = $pass;
   echo "done";
//header("location: view/adminl.php");

   }
 else {
$error = "eid or pass is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
