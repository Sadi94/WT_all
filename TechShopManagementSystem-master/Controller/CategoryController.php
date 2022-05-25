<?php
    require_once "Model/db_config.php";

    $category_id = "";
    $err_category_id = "";
    $category_name = "";
    $err_category_name = "";
    $has_error = false;


    if(isset($_POST["search"])){
        $searchQuery = $_POST["search"];
        $searchQuery = preg_replace("#[^0-9a-z]#i","",$searchQuery);

        $query = "SELECT * FROM categories WHERE category_name LIKE '%$searchQuery%'";
        execute($query);
    }

    if(isset($_POST["addCategory"])){
        if(empty($_POST["category_name"])){
            $err_category_name = "[Category Name cannot be empty]";
            $has_error = true;
        }else{
            $category_name = htmlspecialchars($_POST["category_name"]);
        }

        if(isset($_POST["addCategory"])){
            insertCategory($category_name);
        }
    }

    if(isset($_POST["editCategory"])){
        updateCategory($_POST["category_id"],$_POST["category_name"]);
    }

    function insertCategory($category_name){
        $query = "INSERT INTO `categories` (`category_id`, `category_name`) VALUES (NULL, '$category_name');";
        execute($query);
        header("Location: AllCategories.php");
    }

    function updateCategory($category_id,$category_name){
        $query = "UPDATE categories SET category_name='$category_name' WHERE category_id=$category_id";
        execute($query);
        header("Location: AllCategories.php");
    }
    
    function getCategory($id){
        $query = "SELECT * FROM `categories` WHERE category_id = $id";
        $result = get($query);
        if(count($result) > 0){
            return $result[0]; 
        }
        return false; 
    }

    function getAllCategories(){
        $query = "select * from categories";
        $result = get($query);
        return $result;
    }

    function searchCategory($key){
        $query = "SELECT category_name, category_id FROM categories WHERE category_name LIKE '%$key%'";
        $result = get($query);
        return $result;
    }

    
?>