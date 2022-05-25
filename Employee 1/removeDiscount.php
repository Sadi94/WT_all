    <?php
	    require_once "MODEL/db_config.php";
	 
	  $id=$_GET["id"];
     deleteDiscount($id);
	 
		 
		function deleteDiscount($product_id){
        $query = "UPDATE `product` SET `discount`=' ' WHERE `product id`=$product_id";
        execute($query);
        header("Location:UpdateDiscount.php");
        }

		

	?>