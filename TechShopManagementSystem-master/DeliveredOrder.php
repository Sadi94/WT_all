     <?php
	 
	    require_once "MODEL/db_config.php";
	    $id=$_GET["id"];
        deliveredOrder($id);
	 
		 
		function deliveredOrder($product_id){
        $query = "UPDATE `order` SET `status`='delivered' WHERE `order id`=$product_id";
        execute($query);
        header("Location:deliveredList.php");
        }
		
	
	
	 ?>
	