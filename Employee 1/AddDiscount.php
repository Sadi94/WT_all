<?php 
     require_once"Employee_header.php";
    require_once "CONTROLLER/addDiscountController.php";
	require_once "CONTROLLER/ProductController.php";
	$id = $_GET["id"];
    $product= getProduct($id);
	//echo "$id";
?>


<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
		<script src="JS/addDiscountController.js"></script>
	</head>
	<body>
		<div class="text-center">
			<h3 class="text">Add Discount</h3>
		</div>
		
		<div class="center"  align="center">
<table>
	
	<td>
	
		<form action="" onsubmit="return validate()" method="POST"  class="form-horizontal form-material">
             
			<div class="form-group ">
			
				<h4 class="text"> Discount Price:</h4> 
				<input type="hidden" name="product_id" value="<?php echo $product["product id"];?>">
				<input type="text" name="Disprice" id="Disprice" value="" class="form-control">
				<span class="err-msg" id="err_Disprice"><?php echo $err_Disprice;?></span>
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name="Add_discount" class="btn btn-success" value="Add discount" class="form-control">
				
			</div>
		</form>
	</td>
 	
   </table>				
 </div>
 </body>
</html>
		