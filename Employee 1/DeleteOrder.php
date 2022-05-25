 <?php
	    require_once "MODEL/db_config.php";
	 
	  $id=$_GET["id"];
      deleteOrder($id);
	 
		 
		function deleteOrder($product_id){
        $query = "DELETE FROM `order`  WHERE `order id`=$product_id";
        execute($query);
        header("Location:Checkout.php");
        }

		

	?>