<?php
    require_once "MODEL/db_config.php";

    $pname="";
    $err_pname="";
    $pcategory_id="";
    $err_pcategory_id="";
    $pprice;
    $err_pprice;
    $pquantity;
    $err_pquantity;
    $pdescription="";
    $err_pdescription="";
    $pimage="";
    $err_pimage="";
    $has_error=false;

    function getAllProducts()
    {
      
        $query = "SELECT *  from product ";
        $result = get($query);
        return $result;
    }

    	function getProduct($id)
    {
        $query = "SELECT * FROM `product` WHERE `product id`='$id'";
		
        $result = get($query);
        if(count($result) > 0)
        {
            return $result[0];
             		
        }
        return false; 
    }
 
 
?>