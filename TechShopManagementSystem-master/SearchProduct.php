<?php
    require_once 'Controller/ProductController.php';
    $key = $_GET["key"];
    $products = searchProduct($key);
    foreach($products as $product){
        echo "<a href='EditProduct.php?id=".$product["product_id"]."'>".$product["product_name"]."</a><br>";
    }
?>