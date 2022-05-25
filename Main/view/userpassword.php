
<?php include('../controller/changepassword.php') ?>

 <div>

 <?php  ?>

<div class="profile-part">

<div class="profile-info">

    <fieldset>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
			<legend>CHANGE PASSWORD: </legend>
			<br>
			<!-- <input type="text" name="email"> -->
			<label for="pass">Current password: </label>

			<input type="text" value="
           
            " name="Cpass">
		<span class="err">*
			
			</span><br><br>
			<label for="pass">New password: </label>

			<input type="text" name="Npass">
		<span class="err">*
		<?php echo $passErr; ?>
			</span><br><br>
			<label for="pass">Retype New password: </label>

			<input type="text" name="Rpass">
		<span class="err">*
		<?php echo $passErr; ?>
			</span><br><br>
			<input type="submit" value="submit " name="" id="">
			<br>
			<br>
			
		</fieldset>
        
       
    

    
    
    
    
    </form>
        
        </fieldset>
</div>

</div>
</div>


