<? php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		
	</head>
	<body>
	<h1 align='center'>ALL user DATA Form</h1>	                    
		<form action="" method="post">
			<table  align='center'>	
			<tr>
            <td><h2>admin data info is  :</h2></td>
			<td><a href="adpatienddetail.php">data here</a><br> </h2>
			</tr>
            
			<tr>
			<td><h2>patient data info  :<h2></td>
			<td><a href="adpatienddetail222.php">data here</a><br> </h2>
			</tr>
			<tr>
			<td><h2>nurse data info  :<h2></td>
			<td><a href="adnusedetail.php">data here</a><br> </h2>
			</tr>					
			<tr>
			<br><br><br>
			<td><h2>Do you want to delete the any admin data<h2></td>
			<td><a href="admindelete.php">deletepatent</a></td>

			</tr>

			<tr>
			<br><br><br>
			<td><h2>Do you want to delete the any patient data<h2></td>
			<td><a href="adpatdel.php">deletepatent</a></td>

			</tr>

			<tr>
			<td><h2> Do you want to delete the any nurse data<h2></td>
			<td> <a href="adnurdel.php">deletepatent</a></td><br>
			</tr>

            <tr>
            <td><h2> update the any information of admin data<h2></td>
            <td> <a href="adminupdate.php">update </a></td><br>
			</tr>
			<tr>
            <td><h2> update the any information of patient data<h2></td>
            <td> <a href="adupdatepatient.php">update </a></td><br>
			</tr>
			<tr>
            <td><h2> update the any information of Nurse data<h2></td>
            <td> <a href="adupnurse.php">update </a></td><br>
			</tr>
			<tr><td align='center'><br><a href="adminlogout.php"> logout</a></td></tr>
        
            			
		</form>
	</body>
</html>