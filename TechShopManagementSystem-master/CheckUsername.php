<?php
	require 'Controller/EmployeeController.php';
	$username = $_GET["uname"];
	$rs = checkUsername($username);
	if($rs){
		echo "true";
	}
	else echo "false";
?>