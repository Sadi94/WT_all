<?php
class db1{
 
function OpenCon1()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "test";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 return $conn;
 }
function approve($conn,$table,$aid)
 {
     $sql ="UPDATE $table SET approve = 1 WHERE aid='".$aid."'";

    $result=$conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }*/
    return $result;
 }
 function approveemp($conn,$table,$eid)
 {
     $sql ="UPDATE $table SET approve = 1 WHERE eid='".$eid."'";

    $result=$conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }*/
    return $result;
 }
 function deleteemp($conn,$table,$eid)
 {
     $sql ="DELETE FROM $table WHERE eid='".$eid."'";

    $result=$conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }*/
    return $result;
 }
 function approveven($conn,$table,$vid)
 {
     $sql ="UPDATE $table SET approve = 1 WHERE vid='".$vid."'";

    $result=$conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }*/
    return $result;
 }
  function approvecitizen($conn,$table,$cid)
 {
     $sql ="UPDATE $table SET approve = 1 WHERE cid='".$cid."'";

    $result=$conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }*/
    return $result;
 }
 function CheckUser($conn,$table,$aid,$pass)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE aid='". $aid."' AND pass='". $pass."'");
 return $result;
 }
 function register($conn,$table,$aid,$pass,$name,$email,$phone)
 {
     $sql = "INSERT INTO $table (aid, pass,name,email,phone)
VALUES ('$aid', '$pass', '$name','$email','$phone')";

    $result=$conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }*/
    return $result;
 }
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
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