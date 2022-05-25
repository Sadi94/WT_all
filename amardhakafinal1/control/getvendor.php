<?php
include('../model/connection.php');

$user = $_POST['vid'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByvid($conobj,"ven",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>vid</th><th>vname</th><th>phone</th><th>location</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["vid"]."</td><td>".$row["vname"]."</td><td>".$row["phone"]."</td><td>".$row["location"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}