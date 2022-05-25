<?php
session_start(); 
if(empty($_SESSION["pid"])) 

?>


<!DOCTYPE html>
<html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/showproblem.js"></script>
  
<link rel="stylesheet" type="text/css" href="../Css/problem.css">
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
 <div class="probbox">

<h1>Show Problem</h1>

<label>Enter the problem id</label>

  <input type="text" id="pid" >
  <button onclick="showmyuser()">Search</button>

<p id="mytext"></p>

<!-- <h5>Do you want to <a href="../view/emp.php">Back to emp</a></h5> -->
</div>
</body>
</html>

<?php


?>   