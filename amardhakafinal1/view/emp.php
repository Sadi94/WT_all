<?php
session_start(); 
include('../control/assignvendorprocess.php');

if(empty($_SESSION["eid"])) 
{
header("Location: empl.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<title> Employee </title>
<link rel="stylesheet" type="text/css" href="../Css/cssreg.css">
<body>
	
	<header>
	<nav class="navbar">
		<ul>
	<li><a href="#">Home</a></li>
	<li><a href="../view/empupdate.php">Profile</a></li>
	<li><a href="../control/logout.php">logout</a></li>
		<ul>
</nav>
</header>
 

<!-- <form action="../control/emprprocess.php" method="POST">  -->
<div class="box">	
<p>Show Problem <p><br>
<a href="../view/showproblem.php">
  <button>Click</button>
</a>
</div>



<div class="box2">	
<p>Show Vendor <p><br>
<!-- <input type="text" name="vendor"><br> -->
<a href="../view/showvendor.php">
  <button>Click</button>
</a>
</div>
<form action="../control/assignvendorprocess.php" method="POST"> 
<div class="box3">
<h1>Assign Vendor</h1> <br>
<p>Enter The Problem Id</p> <br>
<input name="pid" type="text">
	<br><br/>
	<p>Enter the Vendor Id</p> <br>
<input name="vid" type="text">
	<br><br/>
	<input name="submit" type="submit" value="Assign Vendor">
</div>	
</form>
</body>
</html>

<?php
// session_start(); 
// if(empty($_SESSION["username"])) 
// {
// header("Location: ../control/login.php"); // Redirecting To Home Page
// }

?>


