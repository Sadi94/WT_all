<?php
include('../model/adb.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['aid']) || empty($_POST['pass'])) {
$error = "aid or pass is invalid";
}
else
{
$aid=$_POST['aid'];
$pass=$_POST['pass'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"admin",$aid,$pass);

if ($userQuery->num_rows > 0) {
   while($row = $userQuery->fetch_assoc()) {
     if($row["approve"]==1){
      $_SESSION["aid"] = $aid;
$_SESSION["pass"] = $pass;

     }
else{
   echo "not approved";
}

  }

   }
 else {
$error = "aid or pass is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
