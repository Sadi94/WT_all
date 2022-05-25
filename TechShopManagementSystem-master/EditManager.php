<?php
    session_start();
	if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])) {
        header("Location: Login.php");
    }
	include_once "AdminHeader.php";
    require "Controller/ManagerController.php";
	$id = $_GET["id"];
	$manager = getManager($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/myStyle.css">
    <title>Edit Manager</title>
</head>
    <body>
	<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Username</h4>
			<input type="hidden" name="id" value="<?php echo $manager["id"];?>">
			<input type="text" name="uname" value="<?php echo $manager["username"]?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Name</h4>
			<input type="text" name="name" value="<?php echo $manager["name"]?>" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">E-mail</h4>
			<input type="text" name="email" value="<?php echo $manager["email"]?>" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">Phone Number</h4>
			<input type="text" name="phone" value="<?php echo $manager["phone"]?>" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">Salary</h4>
			<input type="text" name="salary" value="<?php echo $manager["salary"]?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			<input type="submit" name="EditManager" class="btn btn-success" value="Update" class="form-control">
		</div>
		</form>
	</div>
    </body>
<?php
	include_once "AdminFooter.php";
?>
</html>