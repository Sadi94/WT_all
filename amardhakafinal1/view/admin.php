<?php
session_start(); 
if(empty($_SESSION["aid"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/ajquery.js"></script>
<link rel="stylesheet" type="text/css" href="../css/acss.css">
</head>
<body><body>
    <h1 id="header">Admin page</h1><br><br>
<div id="saa">
    <button>Hide/Show Options</button><br>
    <div id="saaj">
    <a href="../view/showa.php">Show and approve New Admins</a><br><br>
    <a href="../view/showe.php">Show and approve unapproved Employee</a><br><br>
    <a href="../view/showv.php">Show and approve unapproved Vendor</a><br><br>
    <a href="../view/showc.php">Show and approve unapproved Citizen</a><br><br><br>
    </div>
    </div>
<div id="sad">
    <button>Hide/Show Options</button><br>
    <div id="sadj">
    <a href="../view/searchemp.php">search employee</a><br><br><br>
    <a href="../view/empdelete.php">Delete employee</a><br><br><br>
    </div></div>
    <a id="logout" href="../control/logout.php">logout</a>

<br>
<br>
<br><br>
<br>

<div align="center">
    <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> <span/> </h5> 
 </div>
</body>
</html>

<?php


?>   


