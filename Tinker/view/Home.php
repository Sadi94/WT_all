<?php
	 session_start();
	 extract($_SESSION);
	 
	 unset($_SESSION['username']);
	 

  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tinker</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
  </head>
 <body>

			<h1 align='center' >Tinker</h1>

    <ul>
        <li ><a  href="../view/signupPage.php">Signup</a></li>
        <li ><a  href=" ">Customer</a></li>
        <li ><a  href=" ">Employee</a></li>
        <li ><a  href="stLogin.php">Store Owner</a></li>
        <li ><a  href="adlogin.php">Admin</a></li>
        <li><a href="contact.php">Contact</a></li>
	      <li><a href="about.php">About</a></li>

        
</ul>
    
        <h1 align='center' >" Find All In A Single Site "</h1>
        <center><a href="Home.php"><img src="../src/t.png" alt=""></a></center>
        
        <h2 align='center' >STAY HOME , STAY SAFE</h2> 
         <?php 
        include "../include/footer.php";
      ?>   
       
  </body>    
</html>