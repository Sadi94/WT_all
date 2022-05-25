<?php

$flag=0;
$json = file_get_contents('citizen.json');
$array = json_decode($json, true);
if(!empty($array)){
foreach($array AS $index=>$json) {
        if($json['cid']==$_POST["cid"]){
        	$flag=1;
        	echo "Id exists";
        	break;
        }
    }}
if(empty($_POST["eid"])||empty($_POST["name"])||empty($_POST["password"])){
$flag=1;
echo "<br>empty field not acceptable";	
}
if (preg_match('[@_!#$%^&*()<>?/|}{]', $_POST["cid"])!=0) {
$flag=1;
echo "<br>Give proper id";

}
if (!ctype_alpha($_POST["name"])) {
$flag=1;
echo "<br>Give proper name";

}
if (strlen($_POST["password"])<4) {
$flag=1;
echo "<br>Password length should be more than 4";

}
if($flag==1){
	        echo '<br><a href="../view/citizenr.php">Try Again</a><br>';
	        echo '<a href="../view/home.php">Home</a><br>';
	        echo '<a href="../view/citizenl.php">Login</a>';
}
if($flag==0){

	   $formdata = array(
	      'cid'=> $_POST["cid"],
	      'name'=> $_POST["name"],
	      'password'=>$_POST["password"],
	      'approve'=>0,
	   );
	  
       $existingdata = file_get_contents('citizen.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata);	   
	   //write json data into data.json file
	   if(file_put_contents("citizen.json", $jsondata)) {
	        echo "Data successfully saved waiting for citizen approval <br>";
	        echo '<a href="../view/home.php">Home</a><br>';
	        echo '<a href="../view/citizenl.php">Login</a>';
			//echo json_encode($formdata);
	    }
	   else {
	        echo "no data saved";
	   }
	}

?>
