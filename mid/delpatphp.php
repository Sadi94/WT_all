<?php
// File json 
$file = "Patient.json";

// get file json
$mainjson = file_get_contents($file);

// decode
$data = json_decode($mainjson, true);

// loop to array
foreach ($data as $key => $d) {
    //get the id 
    if ($d['nid'] === $_POST["nid"]) {
        
        array_splice($data, $key, 1);
    }
}


// encode 
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// save
$save = file_put_contents($file, $jsonfile);


$data = file_get_contents("Patient.json");
$mydata = json_decode($data);



foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
   echo $key    .$value."<br>";
   

} 

}
?>