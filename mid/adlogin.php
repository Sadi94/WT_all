<?php
	session_start();	
    
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		
	</head>
	<body>
	<h1 >Admin Login Form</h1>	<br>                    
		<form action="loginphp.php" method="post">
			<table  >	
					<tr>
					<td>    <input type="text" name="email" placeholder="Enter your username" > :</td>
					<td>    <input type="password" name="password" placeholder="Enter your password" ></td>

					</tr>
										
					<tr>
					<tr>
					<tr><td align='center'><br><input type="submit" name="submit" value="Login"></td></tr>
				
					<tr><td align='center'><br>
					Don't have an account yet?
						<a href="adregestation.php">
							Create an account
						</a>								
					</tr>
					<tr><td align='center'><br>
					do you want to go home page?
						<a href="home.php">
							go to Home
						</a>								
					</tr>		
				</table>		
		</form>
	</body>
</html>