<?php
include('../model/ad.php');

//$user = $_POST['uname'];

  $error="";

if (isset($_POST['delete'])) {


$connection = new ad();
$conobj=$connection->strt();
$nid=$_POST['nid'];

$userQuery=$connection->del($conobj,"admin",$nid);
$error="bh";

if ($conobj->query($userQuery) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
//$connection->CloseCon($conobj);
}
else
{
  
$connection = new ad();
$conobj=$connection->strt();

$MyQuery=$connection->GetUserByUname($conobj,"admin",$_POST['fname'] );


if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Store Name</th><th>Nid</th><th>Position</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["mail"]."</td><td>".$row["aname"]."</td><td>".$row["nid"]."</td><td>".$row["position"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

}

?>