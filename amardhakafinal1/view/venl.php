<?php
session_start();
if(!empty($_SESSION["vid"])) 
{

            //echo "logged in";
header("Location: ven.php"); // Redirecting To Home Page
}


?>
<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form action="../control/venlcheck.php" method="post">
    <input type="text" name="vid" placeholder="Enter your ID" >
    <input type="password" name="password" placeholder="Enter your password" >
    <input name="submit" type="submit" value="LOGIN">
</form>
<a href="venr.php">Register</a><br>
<a href='../index.php'>home</a>
<br>
<?//php echo $error; ?>

</body>
</html>