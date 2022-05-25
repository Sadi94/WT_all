<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amar Dhaka</title>
</head>
<body>
<h1>Amar Dhaka</h1>
<a href="adminl.php">Admin</a>
<a href="empl.php">Employee</a>
<a href="venl.php">Vendor</a>
<a href="citizenl.php">Citizen</a>
</body>
</html>
<?php
session_start(); 
if(empty($_SESSION["pid"])) 

?> -->


<!DOCTYPE html>
<html>
  <head>
  
  
<link rel="stylesheet" type="text/css" href="../Css/homepage.css">
<meta charset="utf-8">
	
</head>
<title> Amar Dhaka </title>
<body>
	<header>
	<nav class="navbar">
		<ul>
	<li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
	<li><a href="#">Contact us</a></li>
	<li><a href="#">Gallery</a></li>
	<li><a href="#">Overview</a></li>
    <ul>
</nav>
</header>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
    </head>
    <body>
        <div class="text-center">
            <h1 class="header">Amar Dhaka</h1>
        </div>
    
        <div class="text-center">
            <a href="citizenl.php" class="btn btn-primary">Citizen</a>
            <a href="adminl.php" class="btn btn-warning">Admin</a>
            <a href="empl.php" class="btn btn-danger">Employee</a>
            <a href="venl.php" class="btn btn-warning">Vendor</a>
                       
        </div>
		<img src="../photos/vac.png">

	<p><a href="https://surokkha.gov.bd/">COVID-19 VACCINE REGISTRATION HERE</a></p>


        



</body>
</html>

<?php


?>   