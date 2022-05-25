<?php
	   session_start();
       if(!isset($_SESSION["user"]) || !isset($_COOKIE["user"])){
		   header("Location: login.php");
	   }
	    
   
 ?>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">Employee</h1>
		</div>
		
		<div class="text-center">
			<a href="MyAccount.php" class="btn btn-primary">My Account</a>
			<a href="CustromerList.php" class="btn btn-success">Custromer List</a>
			<a href="Checkout.php" class="btn btn-info">CheckOut Orders</a>
			<a href="AcceptOrder.php" class="btn btn-warning">Confirm Order List</a>
			<a href="deliveredList.php" class="btn btn-primary">Delivery List</a>
			<a href="allproducts.php" class="btn btn-success">Add Discount</a>
			<a href="UpdateDiscount.php" class="btn btn-info">Update Discount</a>
			<a href="Approve.php" class="btn btn-warning">Approve</a>
			<a href="logout.php" class="btn btn-danger">Logout</a>		
		</div>
		</html>
	   
		
		