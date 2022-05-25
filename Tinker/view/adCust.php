<?php
include('../model/cus.php');

//$user = $_POST['uname'];



$connection = new na();
$conobj=$connection->strt();

$MyQuery=$connection->show($conobj,"customer" );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Contact</th><th>ID</th><th>Address</th><th>Store ID</th><th>Email</th><th>Password</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["fname"]."</td><td>".$row["contact"]."</td><td>".$row["ID"]."</td><td>".$row["Address"]."</td><td>".$row["ID"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  
