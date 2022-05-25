<?php
session_start(); 
if(empty($_SESSION["eid"])) 
{

header("Location: empl.php"); // Redirecting To Home Page
}

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Assign Vendor</title>
</head>
<body>
<form action="../control/assignvendorprocess.php" method="POST">
<h1>__________________________________Assign Vendor__________________________________</h1><br><br>
<p>Enter The Problem Id:</p> <br>
<input name="problemid" type="text">
	<br><br/>
<p>Enter the Vendor Id:</p> <br>
<input name="vid" type="text">
	<br><br/>
<input type="submit" value="Assign Vendor">
</form>
</body>
</html>