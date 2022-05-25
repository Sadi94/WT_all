
    <?php include_once('header.php') ?>
    <?php include('../controller/registrationvalidation.php') ?>
  
    <div class="container-wrapper">

    <div class="registration-panel">
    <form method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <fieldset>
        <legend>Registration</legend>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" ><span class="err">*
			<?php echo $nameErr; ?>
		</span><br><br><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><span class="err">*
			<?php echo $emailErr; ?>
		</span><br><br><br><br>
        <label for="usr">User Name:</label>
        <input type="text" id="user" name="username" ><span class="err">*
			<?php echo $userErr; ?>
		</span><br><br><br><br>
        <label for="pass">Password:</label>
        <input type="text" id="pass" name="pass" ><span class="err">*
			<?php echo $passErr; ?>
		</span><br><br><br><br>
        <label for="cpass">Confirm Password:</label>
        <input type="text" id="cpass" name="cpass" ><br><br>
        
        
        <fieldset>
                <legend>Gender</legend>
                
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">Other
            <br>
            <br>
        </fieldset>
        <br>
        <br>
        
        <input type="submit" value="submit">

        <h3>Alreday Registered? <a href="userlogin.php">Log In</a></h3>
    </fieldset>
    </form>

    </div>

  
   


</div>

