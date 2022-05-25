<?php
include('../model/adb.php');


 $error="";
// store session data





$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"ven");

if ($userQuery->num_rows > 0) {
   echo "<div id='show'>";
   while($row = $userQuery->fetch_assoc()) {
      if($row["approve"]==0){
     echo "<br>ID: ".$row["vid"]."<br> Name : ".$row["vname"]."<br><br>";}

  }
  echo "</div>";

   }
 else {
$error = "id invalid";
}
$connection->CloseCon($conobj);





?>
