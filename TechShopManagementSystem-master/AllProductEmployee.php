<?php 
	require_once "EmployeeHeader.php";
	require_once "Controller/ProductController.php";
	$products = getAllProducts();
?>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/myStyle.css">
	</head>
	<body>
		
	<div class="center">
	<h3 class="text">ALL Products</h3>
	<table class="table table-striped">
		<thead>
			<th> Product Id </th>
			<th> Name</th>
			<th> Price</th>
			<th> Discount</th>
		</thead>
		<tbody>
		<?php
			foreach($products as $product){
			if(empty($product["discount"])){
				echo "<tbody>";	
					echo "<td>".$product["product_id"]."</td>";
					echo "<td>".$product["product_name"]."</td>";
					echo "<td>".$product["product_price"]."</td>";
					echo "<td>".$product["product_discount"]."</td>";
				    echo '<td><a href="AddDiscount.php?id='.$product["product_id"].'" class="btn btn-success">Add Discount</a></td>';
				echo "</tbody>";

			}
		}		
		?>
		   
		</tbody>
	</table>
  </div>
</html>


