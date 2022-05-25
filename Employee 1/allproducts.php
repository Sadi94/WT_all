<?php 
	 require_once"Employee_header.php";
	require_once "CONTROLLER/ProductController.php";
	$products = getAllProducts();
?>




<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
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
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		<?php
			foreach($products as $product)
			{
			if(empty($product["discount"])){
				echo "<tbody>";
				  
					
					echo "<td>".$product["product id"]."</td>";
					echo "<td>".$product["product name"]."</td>";
					echo "<td>".$product["price"]."</td>";
					echo "<td>".$product["discount"]."</td>";
				    echo '<td><a href="addDiscount.php?id='.$product["product id"].'" class="btn btn-success">Add Discount</a></td>';
				    echo "</tbody>";

			}
		}		
		?>
		   
		</tbody>
	</table>
  </div>
</html>


