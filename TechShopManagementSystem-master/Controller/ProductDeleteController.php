<?php
    require_once "../Model/db_config.php";

    $id=$_GET["id"];
    
    function deleteProduct($id){
    $query="DELETE FROM products WHERE product_id = $id;";
    execute($query);
    }
    deleteProduct($id);

    header("Location: ../AllProducts.php");
?>