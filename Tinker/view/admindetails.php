<?php
include('../model/ad.php');

//$user = $_POST['uname'];


$connection = new ad();
$conobj=$connection->strt();

$MyQuery=$connection->show($conobj,"admin" );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Position</th><th>Password</th><th>Nid</th><th>Date of Birth</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["mail"]."</td><td>".$row["aname"]."</td><td>".$row["password"]."</td><td>".$row["nid"]."</td><td>".$row["adate"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  