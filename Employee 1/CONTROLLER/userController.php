<?php
    function getAlluser()
    {
        $query = "SELECT * FROM `user` ";
        $result = get($query);
        return $result;
    }
	
	
	
	?>