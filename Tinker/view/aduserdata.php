<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>

		<link rel="stylesheet" type="text/css" href="../css/user.css">
		
	</head>
	<body>
	<h2 align='center'>ALL user DATA Form</h2>	
	<!-- <h3 align= "right">Logged in as </h3> -->                 
		<form action="" method="post">
			
			<table  align='center'>	
            <td><h2>Admin info </h2></td>
			<td><a href="admindetails.php">Click Here</a><br> </h2>
			
			<tr>
			<td><h2>Store Owner info <h2></td>
			<td><a href="adSodetails.php">Click Here</a><br> </h2>
			</tr>
			<tr>
			<td><h2>Employee info <h2></td>
			<td><a href="adEmp.php">Click Here</a> </h2>
			</tr>	
			<tr>
			<td><h2>Customer info <h2></td>
			<td><a href="adCust.php">Click Here</a> </h2>
			</tr>				
			<tr>
			<td><h2>Remove Store Owner<h2></td>
			<td><a href="rmvStoreOwn.php">Remove</a></td>

			</tr>

			<tr>
			<td><h2>Remove Customer<h2></td>
			<td><a href="rmvCus.php">Remove</a></td>

			</tr>

			<tr>
			<td><h2> Remove Employee<h2></td>
			<td> <a href="rmvemp.php">Remove</a></td>
			</tr>

            <tr>
            <td><h2> Update Store Owner<h2></td>
            <td> <a href="upStoreOwn.php">update </a></td>
			</tr>
			<tr>
            <td><h2> Update Customer<h2></td>
            <td> <a href="upCustomer.php">update </a></td>
			</tr>
			<tr>
            <td><h2> Update Employee<h2></td>
            <td> <a href="upEmp.php">update </a></td>
			</tr>
			<ul>
			<h2 align='right'>|<img src="../src/home.png" alt=""><a href="Home.php"> Home|</a>
			<img src="../src/logout.png" alt=""><a href="logout.php"> logout|</a></h2></ul>
			<?php include "../include/footer.php"?>

        
            			
		</form>
	</body>
</html>