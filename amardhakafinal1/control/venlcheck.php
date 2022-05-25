<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {

if (empty($_POST['vid']) || empty($_POST['password'])) {
$error = "id or Password is invalid";
}
else
{

$flag=0;
$json = file_get_contents('ven.json');
$array = json_decode($json, true);
foreach($array AS $index=>$json) {
        if($json['vid']==$_POST["vid"]&&$json['password']==$_POST["password"]){
         if($json['approve']==0){
            echo "You account is pending for approval"."<br><br>";
            echo "<a href='../index.php'>home</a>";
         }
         else{

            $_SESSION["vid"] = $_POST['vid'];
            header("location: ../view/ven.php");
        
         //header("location: ../view/ven.php");
      }
           //echo '<br><a href="../view/venr.php">Try Again</a><br>';
           //echo '<a href="../view/home.php">Home</a><br>';
           //echo '<a href="../view/venl.php">Login</a>';
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
