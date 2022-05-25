<?php
    require_once "EmployeeHeader.php";
	//require_once "Model/db_config.php";
	require_once "CONTROLLER/orderController.php";
	
    $orders=getAllOrder();
?>


<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/myStyle.css">
	</head>
	<body>
		<div class="text-center">
			
		</div>
		<div class="center">
	<h3 class="text">Checkout Orders</h3>
	<table class="table table-striped">
		<thead>
			
			<th> Order Id </th>
			<th> Custromer Name</th>
			<th> Order Item</th>
			<th> Quantity</th>
		    <th> Price</th>
			<th> Date</th>
			<th> Status</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
			foreach($orders as $order)
			{     
			
			if($order["status"]=="accept"){
			        echo "<tbody>";
			
				    echo "<td>".$order["order_id"]."</td>";
					echo "<td>".$order["customer"]."</td>";
					echo "<td>".$order["order_item"]."</td>";
					echo "<td>".$order["quantity"]."</td>";
					echo "<td>".$order["price"]."</td>";
					echo "<td>".$order["date"]."</td>";
					echo "<td>".$order["status"]."</td>";
					echo '<td><a href="deliveredOrder.php?id='.$order["order_id"].'" class="btn btn-success">Delivered</a></td>';
				    echo "</tbody>";
			}
		}
				
		?>
		</tbody>
	</table>
  </div>
</html>