<?php
include('../model/adb.php');


 $error="";
// store session data
$eid=$_POST['eid'];




$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->searchemp($conobj,"emp",$eid);

if ($userQuery->num_rows > 0) {
   echo "<div id='show'>";
   while($row = $userQuery->fetch_assoc()) {
      if($row["approve"]==1){
     echo "<br>ID: ".$row["eid"]."<br> Designation: ".$row["deg"]."<br> NID: ".$row["nid"]."<br>Phone: ".$row["phone"]."<br><br>";}

  }
  echo "</div>";

   }
 else {
$error = "id is invalid";
}
$connection->CloseCon($conobj);





?>
