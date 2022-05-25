<?php
include('../model/adb1.php');
//session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['cid'])) {
$error = "cid is invalid";
}
else
{
$cid = $_POST['cid'];


$connection = new db1();
$conobj=$connection->OpenCon1();

$userQuery=$connection->approvecitizen($conobj,"citizen",$cid);

if ($userQuery===true) {
//$_SESSION["eid"] = $eid;
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
