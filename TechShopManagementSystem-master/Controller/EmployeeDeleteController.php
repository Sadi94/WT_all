<?php
    require_once "../Model/db_config.php";

    $id=$_GET["id"];
    
    function deleteEmployee($id){
    $query="DELETE FROM users WHERE id = $id;";
    execute($query);
    }
    deleteEmployee($id);

    header("Location: ../AllEmployees.php");
?>