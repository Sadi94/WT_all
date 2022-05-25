<?php
// File json 
$file = "data.json";

// get file json
$mainjson = file_get_contents($file);

// decode
$data = json_decode($mainjson, true);

// loop to array
foreach ($data as $key => $d) {
    //get the id 
    if ($d['contact'] === $_POST["contact"]) {
        
        array_splice($data, $key, 1);
    }
}


// encode 
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// save
$save = file_put_contents($file, $jsonfile);


$data = file_get_contents("data.json");
$mydata = json_decode($data);



foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
   echo $key    .$value."<br>";
   

} 

}
?>