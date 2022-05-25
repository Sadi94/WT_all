<?php
include('../model/adb.php');


 $error="";
// store session data





$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"citizen");

if ($userQuery->num_rows > 0) {
   echo "<div id='show'>";
   while($row = $userQuery->fetch_assoc()) {
      if($row["approve"]==0){
     echo "<br>ID: ".$row["cid"]."<br> Name: ".$row["name"]."<br><br>";}

  }
  echo "</div>";

   }
 else {
$error = "id is invalid";
}
$connection->CloseCon($conobj);





?>
