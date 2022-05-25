<?php
    require_once 'Controller/CategoryController.php';
    $key = $_GET["key"];
    $categories = searchCategory($key);
    foreach($categories as $category){
        echo "<a href='EditCategory.php?id=".$category["category_id"]."'>".$category["category_name"]."</a><br>";
    }
?>