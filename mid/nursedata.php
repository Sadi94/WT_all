<?php
session_start();
$data = file_get_contents("data.json");
$mydata = json_decode($data);



foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
   
   echo "Nurse  ".$key." is  ".$value."<br>";
   header("userdata.php"); 

} 

}


?>