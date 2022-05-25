<?php
session_start();
include('../control/emprprocess.php');

if(isset($_SESSION['eid'])){
header("location: ../view/emp.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
  <script src="../js/registration.js"></script>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../Css/registration.css" />
  </head>
  <body>
    <div class="regibox">  

    
<form action="" onsubmit="return validateForm()" method="post">
	<h1>Register here</h1>
<p>UserId</p>
<input type="text"id="eid"onmouseover="eidval()" name="eid" placeholder="Enter your UserID" ><br><p id="erroreid"></p>
<p>Designation</p>
<input type="text"id="deg"oninput="degval()"name="deg" placeholder="Enter your designation" ><br><p id="errordeg"></p>
<p>Password</p>
<input type="password"id="password"onkeyup="passval()" name="password" placeholder="Enter your password" ><br><p id="errorpassword"></p>
<p>Phone Number</p>
<input type="number"id="phone"onkeypress="numval()"  name="phone" placeholder="Enter your phone number" ><br><p id="errorphone"></p>
<p>Nid Number</p>
<input type="text" id="nid" onkeydown="nidval()" name="nid" placeholder="Enter your nid" ><br><p id="errornid"></p>
<input name="submit" type="submit" value="Register"><br>
<a href='../index.php'>Back to home</a>   ||
<a href='../view/empl.php'>Back to login</a>

</div>
</form>
<br>
<?php echo $error; ?>

</body>
</html>

