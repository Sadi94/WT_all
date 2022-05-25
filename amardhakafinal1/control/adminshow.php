<?php
include('../model/adb.php');

 $error="";

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"admin");

if ($userQuery->num_rows > 0) {
   echo "<div id='show'>";

   while($row = $userQuery->fetch_assoc()) {
      if($row["approve"]==0){
     echo "ID: ".$row["aid"]."<br>Name: ".$row["name"]."<br>Email: ".$row["email"]."<br>Phone: ".$row["phone"]."<br><br>";}

  }
  echo "</div>";

   }
 else {
$error = "aid or pass is invalid";
}
$connection->CloseCon($conobj);


?>
