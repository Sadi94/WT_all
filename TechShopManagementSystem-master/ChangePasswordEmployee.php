<?php 
      
   require_once"Employee_header.php";
   require_once "CONTROLLER/changePasswordController.php";
   require_once"CONTROLLER/editAccountController.php";
	 $id = $_SESSION["id"];
    $user= getUser($id);

?>
<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
		<script src="JS/changePasswordController.js"></script>
	</head>
	<body>
		 <div class="text-center">
			<h1 class="text">Change Password</h1>
		</div>
		
		<div class="center"  align="center">
			 
	 <table>
	
	    <td>
	
		   <form action="" onsubmit="return validate()" method="post" class="form-horizontal form-material">
             
			<div class="form-group ">
			   <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
				 <input type="password" name="pass" id="password" value="<?php echo $pass;?>" placeholder="Enter Password" class="form-control">
                 <span class="err-msg" id="err_password"><?php echo $err_pass;?></span>	
			</div>
			
			 <div class="form-group ">
			   <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
				<input type="password" name="confirm_pass" id="conpassword" value="<?php echo $confirm_pass;?>" placeholder="Confirm Password" class="form-control">
                <span class="err-msg" id="err_conpassword"><?php echo $err_confirm_pass;?></span>	
			</div>
			
			
			<div class="form-group text-center">
				
				<input type="submit" name="changePass" class="btn btn-success" id="" value="UPDATE" class="form-control">
			</div>
		</form>
	</td>
 	
   </table>				
 </div>
 </body>
</html>
		
		
		
	
		