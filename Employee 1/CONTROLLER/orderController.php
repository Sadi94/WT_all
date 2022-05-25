  <?php
    function getAllOrder()
    {
        $query = "SELECT * FROM `order` ";
        $result = get($query);
        return $result;
    }
	?>