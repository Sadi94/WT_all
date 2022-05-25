<?php 
	include "HeaderUser.php";
	require_once "Controller/ProductController.php";
	$id = $_GET["id"];
	$product = getProduct($id);
?>
<!--item starts -->
<head>
	<link rel="stylesheet" href="styles/basicLayout.css">
</head>
<div class="main-content">
	<h3 class="text" align="center">Specific Product</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th>Category </th>
			<th>Price</th>
			<th>Quantity</th>
			<!-- <th>Description</th> -->
		</thead>
		<?php
			echo '<tr>';
				echo "<td>".$product["product_id"]."</td>";
				echo "<td>".$product["product_name"]."</td>";
				echo "<td>".$product["product_category"]."</td>";
				echo "<td>".$product["product_price"]."</td>";
				echo "<td>".$product["product_description"]."</td>";
				//echo "<td>".$product["description"]."</td>";
			echo '</tr>';
		?>
	</table>
	<table align="center">
		<tr>
			<td>
				<img class="item-image" src="https://m.media-amazon.com/images/I/41n0GIKkW8L._AC_SR160,160_.jpg"></img>
				<input type="number" placeholder="1" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
				<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>
			</td>
			<td>
				<h1 class="text"><?php echo $product["product_name"];?></h1>
				<h2 class="text"><?php echo $product["product_price"];?></h2>
				<p class="text"><?php echo $product["product_description"];?></p>
			</td>
		</tr>
	</table>
</div>

<!--item ends -->
<?php
	include 'footer.php';
?>