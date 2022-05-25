<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>show all problem</title>
</head>
<body>

<h1>___________________________Show all Problems______________________</h1>
<?php
//include_once('UniqueValues.php');
   	 //Get form data
	   $formdata = array(
	      'problemid'=> rand(10,100),
	      'problem'=> $_POST["problem"],
	      'location'=>$_POST["location"],
	   );
	  
       $existingdata = file_get_contents('Problem.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata);

	   




	   
	   //write json data into data.json file
	   if(file_put_contents("Problem.json", $jsondata)) {
	   	header("Location: ../view/citizen.php");
	        //echo "Data successfully saved <br>";
			//echo json_encode($formdata);
	    }
	   else {
	        echo "no data saved";
	   }

?>

</body>
</html>


