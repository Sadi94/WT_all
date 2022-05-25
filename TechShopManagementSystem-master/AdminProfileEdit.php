<?php
	include 'AdminHeader.php';
	require_once "Controller/EditAdminController.php";
	$id=$_SESSION["id"];
	$user= getUser($id);
?>
<!--editproduct starts -->
<html>
    <head>
        <link rel="stylesheet" href="styles/myStyle.css">
		<script src="JS/AdminEditProfile.js"></script>

    </head>
    <body>
<div class="center">
<table>
	<td>
		<img class="item-image" src="Storage/LoginIcon.png"></img>
	</td>
	<td>
		<form action="" onsubmit="return validate()" method="POST"  class="form-horizontal form-material">
  		<div class="form-group">
  			<h4 class="text">Name:</h4>
         	<input type="hidden" name="id" id="id" value="<?php echo $_SESSION["name"];?>"  class="form-control">
  			<input type="text" name="name" id="name" class="form-control">
			<span class="err-msg" id="err_name"><?php echo $err_name;?></span>
  		</div>



      	<div class="form-group">
  			<h4 class="text">UserName:</h4>
        	<input type="hidden" name="id" id="id" value="<?php echo $_SESSION["user"];?>"  class="form-control">
  			<input type="text" name="uname" id="username" class="form-control">
			<span class="err-msg" id="err_username"><?php echo $err_uname;?></span>
  		</div>





      	<!-- <div class="form-group">
  			<h4 class="text">Enter New Password:</h4>
         	<input type="hidden" name="id" id="id" value="<?php echo $_SESSION["id"];?>"  class="form-control">
  			<input type="text" name="pass" id="password" class="form-control">
			<span class="err-msg" id="err_password"><?php echo $err_pass;?></span>
  		</div>


		<div class="form-group">
  			<h4 class="text">Confirm Password:</h4>
         	<input type="hidden" name="id" id="id" value="<?php echo $_SESSION["id"];?>"  class="form-control">
  			<input type="text" name="confirm_pass" id="conpassword" class="form-control">
			<span class="err-msg" id="err_conpassword"><?php echo $err_confirm_pass;?></span>
  		</div> -->



		<div class="form-group">
			<h4 class="text">Email:</h4>
			<input type="hidden" name="id" id="id" value="<?php echo $_SESSION["email"];?>"  class="form-control">
			<input type="text" name="email" id="email" maxlength="50" class="form-control">
			<span class="err-msg" id="err_email"><?php echo $err_email;?></span>
		</div>



      <div class="form-group">
        <h4 class="text">PhoneNumber:</h4>
         	<input type="hidden" name="id" id="id" value="<?php echo $_SESSION["phoneNo"];?>"  class="form-control">
        	<input type="text" name="phone" id="phoneno" maxlength="50" class="form-control">
			<span class="err-msg" id="err_phoneno"><?php echo $err_number;?></span>
      </div>
		
		<div>
			<input type="submit" name="edit_admin" id="" class="btn btn-success" value="Update Profile" class="form-control">
  		</div>
  	</form>
	</td>
</table>
</div>
</body>
</html>
<!--editproduct ends -->
<?php 
	include_once 'AdminFooter.php';
?>
