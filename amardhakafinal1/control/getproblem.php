<?php
include('../model/connection.php');

$user = $_POST['pid'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByeid($conobj,"problem",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>pid</th><th>problem</th><th>location</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["pid"]."</td><td>".$row["problem"]."</td><td>".$row["location"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}
?>