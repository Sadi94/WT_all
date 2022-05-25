<?php 
	
	// if (!empty($_POST['remember'])) {
	// 	setcookie('username', $_POST['uname'], time()+10);
	// 	setcookie('password', $_POST['pass'], time()+10);
	// 	echo "Cookie set successfully";
	// }else{
	// 	setcookie('username',"");
	// 	setcookie('password',"");
	// 	echo "Cookie not set";
	// }

 ?>

 <div class="container-wrapper">
	 <?php include('dashboardheader.php') ?>


	 

	  
 </div>
 <div class="accounts-panel">
	 <img src="" alt=""> <span>
	 <?php
		// session_start();
	//   echo "<h2>". $_SESSION['name'] . "</h2>";
	
	?>


	 </span>

	 <hr>

	 <!-- <input type="text" name="" id="" placeholder="Search"> -->

	 <ul>
		 <li><a href="">Dashboard</a></li>
		 <li><a href="userprofile.php">View Profile</a></li>
		 <li><a href="usermessage.php">Message</a></li>
		 <li><a href="userprofileedit.php">Edit Profile</a></li>
		 <li><a href="userpicchange.php">Change Profile Picture</a></li>
		 <li><a href="userpassword.php">Change Passsword</a></li>
		 <li><a href="userlogout.php">Logout</a></li>
	 </ul>
 </div>
<!-- <a href="login.php">Go back to login</a> -->