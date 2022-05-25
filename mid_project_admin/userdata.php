<? php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		
	</head>
	<body>
	<h1 align='center'>ALL user DATA Form</h1>	                    
		<form action="" method="post">
			<table  align='center'>	
			<tr>
            <td><h2>patient data info is  :</h2></td>
			<td><a href="patentdata.php">data here</a><br> </h2>
			</tr>
            
			<tr>
			<td><h2>nursing data info  :<h2></td>
			<td><a href="nursedata.php">data here</a><br> </h2>
			</tr>					
			<tr>
			<br><br><br>
			<td><h2>Do you want to delete the any patient data<h2></td>
			<td><a href="delpat.php">deletepatent</a></td>

			</tr>

			<tr>
			<td><h2> Do you want to delete the any nurse data<h2></td>
			<td> <a href="delnur.php">deletepatent</a></td><br>
			</tr>

            <tr>
            <td><h2> update the any information of patient data<h2></td>
            <td> <a href="update.php">update </a></td><br>
			</tr>
			<tr>
            <td><h2> update the any information of Nurse data<h2></td>
            <td> <a href="upnur.php">update </a></td><br>
			</tr>
			<tr><td align='center'><br><a href="adminlogout.php"> logout</a></td></tr>
        
            			
		</form>
	</body>
</html>