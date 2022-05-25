<?php
    session_start();
	if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])) {
        header("Location: Login.php");
    }
	include "ManagerHeader.php";
    require "Controller/EmployeeController.php";
	$id = $_GET["id"];
	$employee = getEmployee($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/myStyle.css">
    <title>Edit Employee</title>
</head>
    <body>
	<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Username</h4>
			<input type="hidden" name="id" value="<?php echo $employee["id"];?>">
			<input type="text" name="uname" value="<?php echo $employee["username"]?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Name</h4>
			<input type="text" name="name" value="<?php echo $employee["name"]?>" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">E-mail</h4>
			<input type="text" name="email" value="<?php echo $employee["email"]?>" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">Phone Number</h4>
			<input type="text" name="phone" value="<?php echo $employee["phone"]?>" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">Salary</h4>
			<input type="text" name="salary" value="<?php echo $employee["salary"]?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			<input type="submit" name="EditEmployee" class="btn btn-success" value="Update" class="form-control">
		</div>
		</form>
	</div>
    </body>
    
<?php
	include_once "ManagerFooter.php";
?>
</html>