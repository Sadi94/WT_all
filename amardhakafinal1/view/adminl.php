<?php
include('../control/adminlcheck.php');

if(isset($_SESSION['aid'])){
header("location: admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/acss.css">
<script src="../js/ajs.js"></script>
</head>
<body>


<h2 id="header">Login</h2>


<p id="mytext"></p>  
<div id="login">
<form name="myForm" action="" onsubmit="return validateForm()" method="post">
    ID:<br><input type="text" id="aid" name="aid" placeholder="Enter your aid" ><br><br>
    Password:<br><input type="password" id="pass" name="pass" placeholder="Enter your pass" ><br><br>
    <input name="submit" type="submit" value="LOGIN">
</form>
<a id="loginr" href="adminr.php">Register</a><br><br>
<a id="loginr" href="home.php">Home</a><br><br>
</div>
<br>

<?php echo $error; ?>

<br>
<br>
<br><br>
<br>

<div class="footer">
<h3> Copyright Sabbir Hossain </h3>

</div>
</body>
</html>