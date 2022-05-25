<?php
  require_once "Model/db_config.php";

  function getAllOrder(){
    $query = "SELECT * FROM `orders` ";
    $result = get($query);
    return $result;
  }
?>