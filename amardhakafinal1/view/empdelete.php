<?php
session_start(); 
if(empty($_SESSION["aid"])) 
{

header("Location: adminl.php"); // Redirecting To Home Page
}
include('../control/empdeleteprocess.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/acss.css">
</head>
<body>

<h2 id="header">Delete Employees</h2>
<?php
include '../control/empdshow.php';
?>
<form id="frm" action="" method="post">
    <input type="text" name="eid" placeholder="ID" >
    <input name="submit" type="submit" value="Delete">
</form>
<br>
<a id="back" href="../view/admin.php">Go back</a>
<a id="logout" href="../control/logout.php">logout</a>

<br>
<br>
<br><br>
<br>

<div class="footer">
<h3> Copyright Sabbir Hossain </h3>

</div>
</body>
</html>