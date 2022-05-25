<?php
session_start();
if(empty($_SESSION["cid"])) 
{
    //echo 
header("Location: citizenl.php"); // Redirecting To Home Page
} ?>
<!DOCTYPE html>
<html>
<body>
<form action="../control/citizenprocess.php" method="POST">
<h1>__________________________________CITIZEN__________________________________</h1><br><br>

Problem:<br>
	<input name="problem" type="text">
	<br><br>
	Location:<br>
	<input name="location" type="text">
	<br><br>
	<input type="submit" value="Submit">
	<a href="../control/logout.php">logout</a>
</form>
</body>
</html>