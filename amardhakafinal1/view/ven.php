<?php
session_start(); 
if(empty($_SESSION["vid"])) 
{

header("Location: venl.php"); // Redirecting To Home Page
}

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vendor</title>
</head>
<body>

<h1>__________________________________Vendor__________________________________</h1><br><br>
Show all Problem: <br>
<a href="../control/showproblemvendor.php">
  <button>Click</button>
</a>
	<br><br/>

	<br><br/>
	select problem: <br>
<a href="selectproblem.php">
  <button>Click</button>
</a>
<a href="../control/logout.php">logout</a>
	<br><br/>
</form>
</body>
</html>