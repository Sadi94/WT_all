<!DOCTYPE HTML>  
<html>
<fieldset>
  
  <head> <title> LOGIN </title>
    <style>
     .error {color: #FF0000;}
    </style>
    </head>
    <body>  
	     <br>
		   <div> 
		   
		     <p> <h1 style="color: green"> TINKER </h1> </p>
		 
		 
		   
		       <h3 align= "right">
		 
		 
		       <a style="color:SlateBlu;" href="http://localhost/Webtech/Project/Employee/Home/"> Home |  </a> 
		       <a style="color:SlateBlu;" href="http://localhost/Webtech/Project/Employee/Login/Login.php"> Login |  </a>  
		       <a style="color:SlateBlu;" href="http://localhost/Webtech/Project/Employee/Sign%20Up/SignUp.php"> Sign Up </a> 
		 
		  
		   </h3>
		   
		  <hr>
		  
		</div> 
	   

   <?php
	
         // define variables and set to empty values
        $employeenameErr = $passwordErr = "" ;
        $employeename = $password = ""  ; 
		

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["employeename"])) 
		    {
               $employeenameErr = "EmployeeName is required!";
            } 
		  
		    else 
		    {
               $employeename = test_input($_POST["employeename"]);
		
               // check if name only contains letters and whitespace , period
                if(!preg_match("/^[a-zA-Z-_ ]*$/",$employeename)) 
		        {
                 $employeenameErr = " Employee Name can contain alpha numeric characters, period, dash or underscore only!";
                }
				
				// contains minimum char
					
		        if(strlen($_REQUEST["employeename"]) < 2)   				   
		         {
                   $employeenameErr = "EmployeeName contains at least 2 char!";
                 }
            }
			


            if(empty($_POST["password"])) 
		    {
                $passwordErr = "Password is required!";
            } 
			else 
			    {    
		           $password = test_input($_POST["password"]);
				   
					
                    if(strlen($password)<= '8')
		            {
                       $passwordErr = "Password must not be less than 8 char ";
                    }

					
					if(!preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $_POST["password"])) 
					{
                       $passwordErr .= "Password must contain at least 1 special char!"."<br>";
                    }
 
			    }       	

			
		}


        function test_input($data) 
		{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
	       <br>
	       
	       <fieldset>

          <legend > <h2> LOGIN </h2> </legend>
		  
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		  
		     <b> <label for="employeename"> EmployeeName : </label> </b>
			   <input type="text" name="employeename" value="<?php echo $employeename;?>">
			   <span class="error"> * <?php echo $employeenameErr; ?> </span>
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" value="<?php echo $password;?>">
                <span class="error"> * <?php echo $passwordErr;?></span>
                <br><br>
				
		     <div>
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>

                <input type="submit" name="submit" value="Submit" echo $Login Successful;  > <a href="http://">Forgot Password?</a><br>

             
                    
             </div>
 		
         </form> <br>

          <hr>
	      </div>
		   
		   <div align="center">
		   
		   <h4 > <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h4>
		   </legend>
		   </div>

         </fieldset>
	 
    </body>
  </fieldset>
</html>