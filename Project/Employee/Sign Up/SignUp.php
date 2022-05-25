<title> Sign Up  </title>


 <?php  
    $message = '';  
    $error = '';  
    if(isset($_POST["submit"]))  
	{  
      if(empty($_POST["name"]))  
      {  
           $nameError = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $emailError = "<label class='text-danger'>Enter Email</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $usernameError = "<label class='text-danger'>Enter User Name</label>";  
      } 
	  else if(empty($_POST["password"]))  
      {  
           $passwordError = "<label class='text-danger'>Enter Password</label>";  
      } 
	  else if(empty($_POST["confirmpassword"]))  
      {  
            $confirmpasswordError = "<label class='text-danger'>Enter Confirm Password </label>";  
      } 
	  else if(empty($_POST["gender"]))  
      {  
          $genderError = "<label class='text-danger'>Enter Gender</label>";  
      } 
	  else if(empty($_POST["dateofbirth"]))  
      {  
           $dateofbirthError = "<label class='text-danger'>Enter Date Of Birth</label>";  
      } 
      	  
      else  
      {    
  
            $n=$_POST['name'];
   
              if(!preg_match("/^[a-zA-Z ]*$/",$n)) 
		       {
                 $nameError = "Only letters and white spaces allowed here!";
               }      
			  
              else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailError = "Invalid email format and must be like acb@.Com! ";
               }
			   
               else if(file_exists('data.json'))  
               {  
	   
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array( 
				      
				'name'			=>     $_POST['name'],  
                    'email'             =>     $_POST["email"],  
                    'username'          =>     $_POST["username"],  
				'password'          =>     $_POST['password'],  
                    'confirmpassword'   =>     $_POST["confirmpassword"],  
                    'gender'            =>     $_POST["gender"],
				'dateofbirth'       =>     $_POST["dateofbirth"]
                     
					 
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'> File Submitted Success fully </p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
    }  
 ?>
 
 <!DOCTYPE html>  
 <html> 
 <fieldset> 
      <head>  
           <title>Append Data to JSON File using PHP</title>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
      </head>  
     <body>  
	 
	    <br>
		   <div> 
		   
		      
		      <p> <h1 style="color: green"> TINKER </h1> </p>
		 
		 
		   
		       <h4 align= "right">
		 
		 
		       <a style="color:SlateBlu;" href="http://localhost/Webtech/Project/Employee/Home/"> Home | </a> 
		       <a style="color:SlateBlu;" href="http://localhost/Webtech/Project/Employee/Login/Login.php"> Login |  </a> 
		       <a style="color:SlateBlu;" href="http://localhost/Webtech/Project/Employee/Sign%20Up/SignUp.php"> Sign Up </a> 
		 
		  
		   </h4>
		   
		  <b><hr> </b>
		  
		</div> 
	 
           <br /> 
           <fieldset> 
           <div class="container" style="width:500px;">  
                <h3 align=""> <b> SIGN UP FORM  </b></h3><br />                 
                <form method="post">  
				
                   <div>
					   
                    <h4> <label>Name <span style="color: rgb(255, 255, 255);">***************</span> : </label> 
                     <input type="text" name="name" id="name" ><br/> <h4/>
					 
					 <span style="color:red">
					 
					 <?php 
					 if(isset($nameError))  
                     {  
                          echo $nameError;  
                     }  
                     ?>
					
					</span>
					   <hr>
					</div> 
					
					
					<div>
					
                    <h4> <label>Email <span style="color: rgb(255, 255, 255);"> *************** </span> : </label>
                     <input type="email" name="email" id="email" ><br/> <h4/>
					 

					 
					 <?php
					 if(isset($emailError))  
                     {  
                          echo $emailError;  
                     }  
                     ?>
					 
					
                       <hr>
					</div>
					
					
					<div>
                     <h4> <label>User Name <span style="color: rgb(255, 255, 255);"> ********* </span> : </label>  
                     <input type="text" name="username" id="username" > <br/> <h4/>
                       
					<?php
					 if(isset($usernameError))  
                     {  
                          echo $usernameError;  
                     }  
                     ?> 
					 
					  <hr>
                    </div>					
					 
					<div> 
					<h4> <label>Password <span style="color: rgb(255, 255, 255);"> ********** </span> : </label>  
                     <input type="password" name="password" id="password" /><br/>  <h4/>
					
					<?php
					 if(isset($passwordError))  
                     {  
                          echo $passwordError;  
                     }  
                     ?>
					  
					  <hr>
                    </div> 
					 
					 
					 
					 <div>
                     <h4> <label>Confirm Password <span style="color: rgb(255, 255, 255);"></span>:</label> 
                     <input type="password" name="confirmpassword" class="confirmpassword"/><br/> <h4/>
					 
                     <?php
					 if(isset($confirmpasswordError))  
                     {  
                          echo $confirmpasswordError;  
                     }  
                     ?> 
					 
					 <hr>
                    </div>  
					 
					 <div>
                     <h4> <label>Gender <span style="color: rgb(255, 255, 255);"> ************* </span> : </label>  
                     <input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female">
					  Female <input type="radio" name="gender" value="Other" > Other <br/> <h4/>
					 
					 <?php
					 if(isset($genderError))  
                     {  
                          echo $genderError;  
                     }  
                     ?>  
                   
					  <hr>
                    </div> 
					  
					 <div> 
					 <h4> <label>Date Of Birth <span style="color: rgb(255, 255, 255);"> ****** </span> : </label>  
                     <input type="date" name="dateofbirth" id="dateofbirth" ><br/> <h4/>
					 
					 <?php
					 if(isset($dateofError))  
                     {  
                          echo $dateofError;  
                     }  
                     ?>  </span>	
					<hr>
                    </div> 
					 
					 <div>
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /> <input type="reset" value="Reset" class="btn btn-info" /> <br>                      
                     <?php  
					 
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
					 
					 <hr>
					</div>
					
					   
					   
		            <div align="center">
		   
		            <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h4>
		   
		            </div>
					
		   
                </form>  
           </div>  
		   
           <br />  
      </fieldset>
      </body>
      </fieldset>  
 </html>  