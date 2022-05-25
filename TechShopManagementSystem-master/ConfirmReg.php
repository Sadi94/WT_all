  <?php
	 
	    require_once "MODEL/db_config.php";
	    $id=$_GET["id"];
        confirmReg($id);
	 
		 
		function confirmReg($custromer_id){
        $query = "UPDATE `user` SET `type`='custromer' WHERE `id`=$custromer_id";
        execute($query);
        header("Location:CustromerList.php");
        }
		
	
	
	 ?>