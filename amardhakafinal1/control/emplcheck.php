<?php
 
include('../model/connection.php');
// header("Location: ../view/emp.php");
// echo "hello";
session_start(); 
 $error="";
// store session data
if (isset($_POST['submit'])) {
   // echo "hello2";
if (empty($_POST['eid']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['eid'];
$password=$_POST['password'];
 
$connection = new db();
$conobj=$connection->OpenCon();
echo $_POST['eid'];
//$userQuery=$connection->CheckUser($conobj,"emp",$eid,$password);
$userQuery=$connection->CheckUser($conobj,"emp",$_POST['eid'],$_POST['password']);
 
if ($userQuery->num_rows > 0) {
   while($row = $userQuery->fetch_assoc()) {
     if($row["approve"]==1){
$_SESSION["eid"] = $username;
$_SESSION["password"] = $password;
  header("Location: ../view/emp.php");
   }
else{
   $error = "Not approved yet please wait for admin approval".$conobj->error;
}

 

  }

 

   }
 else {
$error = "Username or Password is invalid".$conobj->error;
}
$connection->CloseCon($conobj);
 
}
}
 
?>