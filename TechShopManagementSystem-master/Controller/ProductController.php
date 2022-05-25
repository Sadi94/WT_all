<?php
    require_once "Model/db_config.php";

    $product_name = "";
    $err_product_name = "";

    $product_category = "";
    $err_product_category = "";

    $product_price = "";
    $err_product_price = "";

    $product_quantity = "";
    $err_product_quantity = "";

    $product_description = "";
    $err_product_description = "";
    
    $has_error=false;

    if(isset($_POST["AddProduct"])){
        if(empty($_POST["product_name"])){
             $err_product_name="[Name Requires]";
             $has_error=true;
        }else{
             $product_name=htmlspecialchars($_POST["product_name"]);
        }

		if(empty($_POST["product_category"])){
			$err_product_category="[Category Required]";
            $has_error=true;
		}else{
			$product_category=htmlspecialchars($_POST["product_category"]);
		}

        if(empty($_POST["product_price"])){
            $err_product_price = "[Price Required]";
            $has_error=true;
        }elseif(!is_numeric($_POST["product_price"])){
            $err_product_price = "[Price should be a numerical value.]";
            $has_error=true;
        }else{
            $product_price = $_POST["product_price"];
        }

        if(empty($_POST["product_quantity"])){
            $err_product_quantity = "[Quantity Required]";
            $has_error=true;
        }elseif(!is_numeric($_POST["product_quantity"])){
            $err_product_quantity = "[Quantity should be a numerical value.]";
            $has_error=true;
        }else{
            $product_quantity = $_POST["product_quantity"];
        }
        
        if(empty($_POST["product_description"])){
			$err_product_description="[Description Required]";
            $has_error = true;
		 }else{
			$product_description=htmlspecialchars($_POST["product_description"]);
         }

         if(!$has_error){
            insertProduct($product_name,$product_category, $product_price, $product_quantity, $product_description);
        }

    }

    if(isset($_POST["EditProduct"])){
        updateProduct($_POST["product_id"],$_POST["product_name"],$_POST["product_category"],$_POST["product_price"],$_POST["product_quantity"],$_POST["product_description"]);
    }

    if(isset($_GET["DeleteProduct"])){
            $id = $GET['delete'];
            deleteProduct($id);
    }

    function insertProduct($product_name,$product_category, $product_price, $product_quantity, $product_description){
        $query = "INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_price`, `product_quantity`, `product_description`) VALUES (NULL, '$product_name', '$product_category', '$product_price', '$product_quantity', '$product_description');";
        execute($query);
        header("Location: AllProducts.php");
    }
    
    function updateProduct($product_id,$product_name,$product_category,$product_price,$product_quantity,$product_description){
        $query = "UPDATE `products` SET `product_name` = '$product_name', `product_category` = '$product_category', `product_price` = '$product_price', `product_quantity` = '$product_quantity', `product_description` = '$product_description' WHERE `products`.`product_id` = $product_id;";
        execute($query);
        header("Location: AllProducts.php");
    }

        function deleteProduct($id){
            $query = "DELETE FROM products WHERE product_id=$id";
            execute($query);
        }
        
        function getProduct($id){
            $query = "SELECT * FROM `products` WHERE product_id = $id";
            $result = get($query);
            if(count($result) > 0){
                return $result[0]; 
            }
            return false; 
        }
    
        function getAllProducts(){
            $query = "SELECT * FROM `products`";
            $result = get($query);
            return $result;
        }

        function searchProduct($key){
            $query = "SELECT product_name, product_id FROM products WHERE product_name LIKE '%$key%'";
            $result = get($query);
            return $result;
        }
?>


    