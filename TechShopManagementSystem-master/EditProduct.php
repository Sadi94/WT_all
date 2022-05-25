<?php
	session_start();
	if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])){
		header("Location: login.php");
	}
	if($_SESSION["type"] == "manager"){
		include "ManagerHeader.php";
	}elseif($_SESSION["type"] == "admin"){
		include_once "AdminHeader.php";
	}
    include "ManagerHeader.php";
    require "Controller/ProductController.php";
    require_once "Controller/CategoryController.php";
	$categories = getAllCategories();
	$id = $_GET["id"];
	$product = getProduct($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/manager.css">
    <title>Add Product</title>
</head>
    <body>
	<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4>
			<input type="hidden" name="product_id" value="<?php echo $product["product_id"];?>">
			<input type="text" name="product_name" value="<?php echo $product["product_name"]?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Category:</h4>
				<select name="product_category" class="form-control">Category:
				    <option selected disabled>Choose</option>
				        <?php
					    	foreach($categories as $category){
						    echo "<option value='".$category["category_name"]."'>".$category["category_name"]."</option>";
					        }
				        ?>
			    </select>
			            <?php echo $err_product_category;?>
		</div>

		<div class="form-group">
			<h4 class="text">Price:</h4>
			<input type="text" name="product_price" value="<?php echo $product["product_price"]?>" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">Quantity:</h4>
			<input type="text" name="product_quantity" value="<?php echo $product["product_quantity"]?>" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">Description:</h4>
			<input type="text" name="product_description" value="<?php echo $product["product_description"]?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			<input type="submit" name="EditProduct" class="btn btn-success" value="Update" class="form-control">
		</div>
		</form>
	</div>
    </body>
    <div class="footer">
    <?php include_once "ManagerFooter.php";?></div>
</html>