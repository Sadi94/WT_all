<?php
    session_start();
	if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])) {
        header("Location: Login.php");
    }
	if($_SESSION["type"] == "manager"){
		include "ManagerHeader.php";
	}elseif($_SESSION["type"] == "admin"){
		include_once "AdminHeader.php";
	}

    require "Controller/CategoryController.php";
	$id = $_GET["id"];
	$category = getCategory($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/manager.css">
    <title>Add Category</title>
</head>
    <body>
	<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4>
			<input type="hidden" name="category_id" value="<?php echo $category["category_id"];?>">
			<input type="text" name="category_name" value="<?php echo $category["category_name"]?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			<input type="submit" name="editCategory" class="btn btn-success" value="Update" class="form-control">
		</div>
		</form>
	</div>
    </body>
    <?php
		include_once "ManagerFooter.php";
	?>
</html>