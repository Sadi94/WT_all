<?php
	require_once "Model/db_config.php";
	$id=$_GET["id"];
    acceptOrder($id);
	 
		 
	function acceptOrder($product_id){
    $query = "UPDATE `order` SET `status`='accept' WHERE `order id`=$product_id";
    execute($query);
    header("Location:ConfirmOrderList.php");
    }
		
?>