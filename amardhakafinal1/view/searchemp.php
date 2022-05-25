<?php
session_start(); 
if(empty($_SESSION["aid"])) 
{

header("Location: adminl.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/acss.css">
</head>
<body>
<h2 id="header">Search Employee</h2>

<script src="../js/aajax.js"></script>
</head>


<div id="frm">
<label>Search employee</label>

  <input type="text" id="eid" >
  <br>


  <button  id="frm"  onclick="showemp()">Search</button>

<p id="thistext"></p>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a id="back" href="../view/admin.php">Go back</a>
<a id="logout" href="../control/logout.php">logout</a>

<br>
<br>
<br><br>


<div class="footer bad">
<h3> Copyright Sabbir Hossain </h3>

</div>
</body>
</html>

<?php


?>   


