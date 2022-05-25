<?php
    require_once "EmployeeHeader.php";
    require_once "Controller/EditAccountController.php";
	 $id = $_SESSION["id"];
    $user= getUser($id);

 ?>
   
    
<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
		<script src="JS/EditAccountController.js"></script>
	</head>
	<body>
		
		<div class="text-center">
		 <h1 class="text">Update Details</h1>
		</div>
		      
		<div class="center"  align="center">
			 
	 <table>
	
	    <td>
	
		   <form action=" "  onsubmit="return validate()" method="POST" class="form-horizontal form-material">
             
			<div class="form-group ">
			   <h4 class="text"> Name:</h4>
			    <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
				 <input type="text" name="name" id="name"value="<?php echo $user["name"];?>"  class="form-control">
                 <span class="err-msg" id="err_name"><?php echo $err_name;?></span>		
			</div>
			
			 <div class="form-group ">
			 <h4 class="text"> Username:</h4>
			 <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
				<input type="text" name="uname" id="username" value="<?php echo $user["username"] ;?>"  class="form-control">
                <span class="err-msg" id="err_username"><?php echo $err_uname;?></span>	
			</div>
			
			 <div class="form-group ">
			     <h4 class="text"> Email:</h4>
				 <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
				<input type="text" name="email" id="email"value="<?php echo $user["email"];?>"  class="form-control">
                <span class="err-msg" id="err_email"><?php echo $err_email;?></span>	
			</div>
			
			 <div class="form-group ">
			    <h4 class="text"> Phone Number:</h4>
				<input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
				<input type="text" name="phone" id="phoneno"value="<?php echo $user["phone"] ;?>"  class="form-control">
                <span class="err-msg" id="err_phoneno"><?php echo $err_number;?>	</span>
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name="updateDetails" class="btn btn-success"  value="UPDATE" class="form-control">
				
			</div>
		</form>
	</td>
 	
   </table>				
 </div>
 </body>
</html>
		
		
      
         
          
           
            
            <