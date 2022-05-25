<?php
// File json 
$file = "Patient.json";

// get file json
$mainjson = file_get_contents($file);

// decode
$data = json_decode($mainjson, true);

// loop to json 
foreach ($data as $key => $d) {
    // get the id to update
    if ($d['nid'] === $_POST["nid"]) {
        $data[$key]['name'] = $_POST["name"];
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
   
    echo  "patient: " .$key. "  is  "    .$value."<br>";
   

} 

}
?>