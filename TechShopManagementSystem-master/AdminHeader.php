<?php
	session_start();
	if(!isset($_SESSION["user"]) || !isset($_COOKIE["user"])){
	header("Location: Login.php");
	}
?>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/myStyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">Admin</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="AdminDashboard.php" class="btn btn-primary">Dashboard</a>
			<a href="AllProductsAdmin.php" class="btn btn-warning">All Products</a>
			<a href="AddProductAdmin.php" class="btn btn-danger">Add Product</a>
			<a href="AllCategoriesAdmin.php" class="btn btn-warning">All Categories</a>
			<a href="AddCategoryAdmin.php" class="btn btn-info">Add Category</a>
			<a href="ManageManager.php" class="btn btn-primary">Manage Manager</a>
			<a href="AdminProfileEdit.php" class="btn btn-primary">Edit My Profile</a>
			<a href="FinancialInfo.php" class="btn btn-primary">Financial</a>
			<a href="Logout.php" class="btn btn-danger">Logout</a>
		</div>
		<!--menu ends-->