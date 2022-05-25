<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {

if (empty($_POST['cid']) || empty($_POST['password'])) {
echo "id or Password is invalid";
}

else
{

$flag=0;
$json = file_get_contents('citizen.json');
$array = json_decode($json, true);
foreach($array AS $index=>$json) {
        if($json['cid']==$_POST["cid"]&&$json['password']==$_POST["password"]){
         if($json['approve']==0){
            echo "You account is pending for approval"."<br><br>";
            echo "<a href='../index.php'>home</a>";
         }
         else{
            
$_SESSION["cid"] = $_POST['cid'];
            header("Location: ../view/citizen.php");
        
         
      }
           //echo '<br><a href="../view/adminr.php">Try Again</a><br>';
           //echo '<a href="../view/home.php">Home</a><br>';
           //echo '<a href="../view/adminl.php">Login</a>';
          $flag=1;
         break;
        }
    }
    if($flag==0){
      echo "wrong id or password";
    }
   }
 
}



?>
