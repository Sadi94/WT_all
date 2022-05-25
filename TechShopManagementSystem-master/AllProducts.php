<?php
    session_start();
	if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])) {
        header("Location: login.php");
    }
	include_once 'ManagerHeader.php';
	require_once "Controller/ProductController.php";
    $products = getAllProducts();
?>
	<head>
		<script src="JS/ProductController.js"></script>
	</head>
	<div class="center">
		<h3 class="text">All Products</h3>
			<table class="table table-striped">
			<div>
				<input type="text" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="Search">
				<p id="suggestion"></p>
			</div>
				<thead>
					<th>Products ID</th>
					<th>Products Name</th>
					<th>Products Category</th>
					<th>Products Price</th>
					<th>Products Quantity</th>
					<th>Products Description</th>
				</thead>
				<?php
				foreach($products as $product):
				?>
			<tbody>
				<td><?php echo $product["product_id"];?></td>
				<td><?php echo $product["product_name"];?></td>
				<td><?php echo $product["product_category"];?></td>
				<td><?php echo $product["product_price"];?></td>
				<td><?php echo $product["product_quantity"];?></td>
				<td><?php echo $product["product_description"];?></td>
				<td><a href="EditProduct.php?id=<?php echo $product['product_id'];?>" class="btn btn-success">Edit</a></td>
				<td><a href="Controller/ProductDeleteController.php?id=<?php echo $product['product_id'];?>" class="btn btn-danger">Delete</a></td>
			</tbody>
				<?php
					endforeach;
				?>
			</table>
	</div>
	
<?php include 'ManagerFooter.php';?>