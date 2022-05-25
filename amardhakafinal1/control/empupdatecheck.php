<?php

 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['eid']) ) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"emp",$_SESSION["eid"],$_POST["deg"],$_POST['phone'],$_POST["nid"]);

echo $userQuery;
$connection->CloseCon($conobj);

}
}

?>