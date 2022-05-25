<?php
session_start(); 
if(empty($_SESSION["vid"])) 

?>


<!DOCTYPE html>
<html>
  <head>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/showvendor.js"></script>
<link rel="stylesheet" type="text/css" href="../Css/vendor.css">
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

<h1>Show Vendor</h1>
</head>
<p><label>find detail of user</label><p>

  <input type="text" id="vid" >
  <button onclick="showmyuser()">Search</button>

<div  class="showvendorbox">
<p id="mytext"></p>
</div>



</body>
</html>
