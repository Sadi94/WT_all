<?php
	 
	    require_once "MODEL/db_config.php";
	    $id=$_GET["id"];
        deleteReg($id);
	 
		 
		function deleteReg($custromer_id){
        $query = "DELETE FROM `user` WHERE `id`=$custromer_id";
        execute($query);
        header("Location:Approve.php");
        }
		
	
	
	 ?>