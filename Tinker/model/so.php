<?php
class pa
{
    function strt()
    {
        $erhost="localhost";
        $eruser="root";
        $erpass="";
        $ername="tinker";

        $conn=new mysqli($erhost,$eruser,$erpass,$ername);
        return $conn;



    }

    function insert($conn,$table,$fname,$lname,$nid,$contact,$email,$password,$gender,$address)
    {
       // $result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcategory',$pprice,'$pimage')");
        $ins=$conn->query("insert into $table VALUES('$fname','$lname','$contact','$nid','$email','$password','$gender','$address')" );
        return $ins;
    }

    function check($conn,$table,$email,$password)
    {
        //$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
        $re = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
        
        return $re;
    }

    function GetUserByUname($conn,$table, $email)
    {
   $result = $conn->query("SELECT * FROM  $table WHERE email='$email'");
    return $result;
    }
   
   
    function del($conn,$table,$nid)
    {
        //$sql = "UPDATE $table SET lname='$lname', mail='$mail' WHERE nid='$username'";
       $d="DELETE FROM $table WHERE nid='$nid'";
       
       return  $d;
    }
   

 
 function show($conn,$table)
    {
        $sh=$conn->query("SELECT * FROM ".$table."");
        return $sh;
    }


    function UpdateUser($conn,$table,$username,$fname,$email,$contact)
    {
        $sql = "UPDATE $table SET fname='$fname', email='$email', contact='$contact' WHERE nid='$username'";
   
       if ($conn->query($sql) === TRUE) {
           $result= TRUE;
       } else {
           $result= FALSE ;
       }
       return  $result;
    }

    function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>