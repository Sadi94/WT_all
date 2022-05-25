<?php
session_start(); 
include('../model/connection.php');
include('../control/empupdatecheck.php');


if(empty($_SESSION["eid"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../Css/update.css">
<meta charset="utf-8">
	
</head>
<title> Employee </title>

<body>
	<header>
	<nav class="navbar">
		<ul>
	<li><a href="../view/emp.php">Home</a></li>
    <li><a href="../view/empupdate.php">Profile</a></li>
	<li><a href="../control/logout.php">logout</a></li>
    
		<ul>
</nav>
</header>
 <div class="updatevendorbox">

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"emp",$_SESSION["eid"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "UserId :<br><input type='text' name='eid' value=".$row["eid"]." > <br><br><br>";
      echo "Designation :<br> <input type='text' name='deg' value=".$row["deg"]." ><br><br><br>";
      echo "Mobile :<br> <input type='number' name='phone' value=".$row['phone']." ><br><br><br>";
      echo "Nid :<br> <input type='text' name='nid' value=".$row["nid"]." ><br><br><br>";
    }
    echo   "<input name='update' type='submit' value='Update'>";
  } else {
    echo "0 results";
  }
?>
<br><br>
<a href="../view/emp.php">Back to emp</a>
</div>
</body>
</html>