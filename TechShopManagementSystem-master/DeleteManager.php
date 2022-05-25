<?php include 'C:\xampp\htdocs\WebTech\Project V2\admin_header.php';
require_once "MODEL/db_config.php";



$id=$_GET["id"];
deleteManager($id);
function deleteManager($id){

	$query="delete from manager where id='$id'";
	execute($query);
	header("Location: manManager.php");
}

include 'admin_footer.php';
?>
