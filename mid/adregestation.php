<?php
	session_start();
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  Registration</title>

	</head>
	<body>
	<h1 align='center'>Admin Registration Form</h1>
	                    
		<form action="adregp.php" method="post"><br>
			
		Enter your first Name :<input name="fname" type="text"> <?php if(!empty($_SESSION['firstname_error']))
							{echo $_SESSION['firstname_error'];}?>
		<br><br>			
		Enter your last Name :<input name="lname" type="text"> <?php if(!empty($_SESSION['lastname_error']))
							{echo $_SESSION['lastname_error'];}?>
		<br><br>

		your company Name:<input type="text" name="aname">  <?php if(!empty($_SESSION['cname'])){
							echo $_SESSION['cname'];}?>

		<br><br>	
				
	    your company Nid  number:<input type="nid" name="nid">  <?php if(!empty($_SESSION['Nid_error'])){
							echo $_SESSION['Nid_error'];}?>

		<br><br>	

		Contact :<input type="contact" name="contact"> <?php if(!empty($_SESSION['cont_error'])){
							echo $_SESSION['cont_error'];}?>
		<br><br>

		Give your  emmail :<input type="email" name="mail"> <?php if(!empty($_SESSION['mail_error'])){
							echo $_SESSION['mail_error'];}?>
		<br><br>

		Password :<input type="password" name="password">  <?php if(!empty($_SESSION['pass_error'])){
						 	echo $_SESSION['pass_error'];}?>
		<br><br>

		what is your position :<input type="radio" id="manager" name="posi" value="manager"> Manager
						<input type="radio" id="web developer" name="posi" value="web developer"> wed developer
						<input type="radio"  id="other" name="posi" value="Other"> Other <?phpif(!empty($_SESSION['posi_error']))
							{
							 	echo $_SESSION['posi_error'];} ?>
		
		<br>	<br>					 
		
		input the date:<input type="date" name="adate"> <?php if(!empty($_SESSION['add_error'])){
							 	echo $_SESSION['add_error'];}?>
					
		<br><br>
		
        <br>
        	
        <input type="submit" name="submit" value="Submit">
		<input type="reset" value="Reset">
        		
				
		<br>			
	              <h3>  Already have an account?
					<a href="adlogin.php">
						Log-in
					</a>	</h3>			
            	
		</form>
	</body>
</html>

<?php
	unset($_SESSION['firstname_error']);
	unset($_SESSION['lastname_error']);
	unset($_SESSION['cname']);
    unset($_SESSION['mail_error']);
    unset($_SESSION['add_error']);
    unset($_SESSION['cont_error']);
    unset($_SESSION['pass_error']);
    unset($_SESSION['posi_error']);
    unset($_SESSION['Nid_error']);
    unset($_SESSION['message']);
?>