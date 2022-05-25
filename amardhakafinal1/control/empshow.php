<?php
include('../model/adb.php');


 $error="";
// store session data





$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"emp");

if ($userQuery->num_rows > 0) {
   echo "<div id='show'>";
   while($row = $userQuery->fetch_assoc()) {
      if($row["approve"]==0){
     echo "<br>ID: ".$row["eid"]."<br> Designation: ".$row["deg"]."<br> NID: ".$row["nid"]."<br>Phone: ".$row["phone"]."<br><br>";}

  }
  echo "</div>";

   }
 else {
$error = "id invalid";
}
$connection->CloseCon($conobj);





?>
