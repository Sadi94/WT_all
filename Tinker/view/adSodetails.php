<?php
include('../model/so.php');

//$user = $_POST['uname'];


$connection = new pa();
$conobj=$connection->strt();

$MyQuery=$connection->show($conobj,"storeowner" );


if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Contact</th><th>Password</th><th>Gender</th><th>Address</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["password"]."</td><td>".$row["gender"]."</td><td>".$row["Address"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

