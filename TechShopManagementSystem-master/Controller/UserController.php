<?php
    require_once "Model/db_config.php";
    
    function getAlluser(){
        $query = "SELECT * FROM users WHERE type = 'user'";
        $result = get($query);
        return $result;
    }	
?>