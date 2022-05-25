<?php
session_start(); 

include('../controller/upStoreOwnC.php');

?>

<!DOCTYPE html>
<html>
     <head>
     <link rel="stylesheet" type="text/css" href="../css/info.css">
</head>
<body>
<h2>Profile Page</h2>

Hii, 
<br>
<br><br>

 <?php echo $error; ?>
<form action='' method='post'>
Input nid number : <input type='text' name='nid'  >
<br><br>
lasttname : <input type='text' name='fname'  >
<br><br>
Email : <input type='text' name='email'  > <br><br>
     <br>
     Contact : <input type='text' name='contact'  > <br><br>

     <input name='update' type='submit' value='Update'> 
     <a href="../view/aduserdata.php"> Back</a> 
<br>
<br><?php include '../include/footer.php'?>

</body>
</html>