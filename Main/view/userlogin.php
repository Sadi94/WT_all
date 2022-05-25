
	<?php include_once('header.php') ?>
	<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
	session_start();

if (($_SESSION['user']) == $_POST['uname'] && ($_SESSION['password']) == $_POST['pass']) {
	
	// echo "<a href='product.php'>Product</a><br>";
	// echo "<a href='logout.php'>Logout</a>";
	// echo "<a href='welcome.php'>Welcome</a> ";
	header("location:welcome.php");
}
else{
	header("location:userlogin.php");
}

	}


	// session_start();
	// echo "<h2>Welcome Mr. ". $_SESSION['user'] . ".</h2>"; 
	// echo "<h2>your passsword  : ". $_SESSION['password'] . "</h2>"; 

 ?>
	<div class="container-wrapper">

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<fieldset>
				<?php
				session_start();
				echo "<h2>Welcome Mr. ". $_SESSION['user'] . ".</h2>"; 

				?>

				<legend>LOGIN</legend>
				Username: 
				<input type="type" name="uname" value=""><br><br>
				Password:
				<input type="password" name="pass" value=""><br><br>
				<input type="checkbox" id="login" name="remember"><label for="login">Remember Me</label><br><br>
				<input type="submit" name="login" value="Login">
				
			</fieldset>
		</form>
	</div>