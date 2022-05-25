<?php

include("../control/emplcheck.php");

if(!empty($_SESSION["eid"])) 
{
header("Location: emp.php"); // Redirecting To Home Page

}


?>
<!DOCTYPE html>
<html>
    <title> Login </title>
<link rel="stylesheet" type="text/css" href="../Css/login.css">
<body>
<?php echo $error; ?> 

 <div class="loginbox">
 <img src="../photos/u.png"  class="logo"> 
<h1>Login Here</h1>
<form action="" method="post">
<p>UserId</p>
<input type="text" name="eid" placeholder="Enter your UserID" required >
<p>Password</p>
<input type="password" name="password" placeholder="Enter your password" required>
<input name="submit" type="submit" value="LOGIN"><br>
<a href="empr.php">Register here</a><br>
<a href='../index.php'>Back to home</a>
</form>
</div>




</body> 
</html>