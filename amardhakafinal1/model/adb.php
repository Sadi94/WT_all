<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "test";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 return $conn;
 }

 function CheckUser($conn,$table,$aid,$pass)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE aid='". $aid."' AND pass='". $pass."'");
 return $result;
 }
 function register($conn,$table,$aid,$pass,$name,$email,$phone)
 {
    $result=false;
    $sql = "INSERT INTO $table (aid, pass,name,email,phone)
VALUES ('$aid', '$pass', '$name','$email','$phone')";
    $userQuery=$conn->query("SELECT * FROM ". $table." WHERE aid='". $aid."' AND pass='". $pass."'");
    if ($userQuery->num_rows > 0) {
        $error ="id exists";
        echo "id exists";
   }
 else {
$result=$conn->query($sql);
}    
    return $result;
 }
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
function searchemp($conn,$table,$eid)
 {
$result = $conn->query("SELECT * FROM  $table WHERE eid='". $eid."'");
 return $result;
 }

 function UpdateUser($conn,$table,$aid,$firstname,$email)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE aid='$aid'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
