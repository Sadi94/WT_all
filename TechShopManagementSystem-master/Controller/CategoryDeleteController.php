<?php
    require_once "../Model/db_config.php";

    $id=$_GET["id"];
    
    function deleteCategory($id){
    $query="DELETE FROM categories WHERE category_id = $id;";
    execute($query);
    }
    deleteCategory($id);

    header("Location: ../AllCategories.php");
?>