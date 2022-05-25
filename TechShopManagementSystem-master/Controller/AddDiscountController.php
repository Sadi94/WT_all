<?php       
   require_once "Model/db_config.php";

	$product_id="";
    $err_productId="";
    $Disprice="";
    $err_Disprice="";
    $has_error=false;
	
	
    function addDiscount($product_id,$Discount){
        $query = "UPDATE `products` SET `product_discount`='$Discount' WHERE `product_id`= $product_id";
        execute($query);
        header("Location: UpdateDiscount.php");
    }

    
    if(isset($_POST["Add_discount"])|| isset($_POST["edit_discount"])){
		 if(empty($_POST["Disprice"])){
            $err_Disprice="**Enter Discount price**";
            $has_error=true;
        }elseif(!is_numeric($_POST["Disprice"])){
            $err_Disprice="**Only insert numeric value**";
            $has_error=true;
        }else{
            $Disprice=$_POST["Disprice"];
        }

        if(!$has_error){
            addDiscount($_POST["product_id"],$Disprice);
		}
		
    }
	?>