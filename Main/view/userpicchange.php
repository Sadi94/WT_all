
<?php include('../controller/userpropicchange.php'); ?>


 <div>

<?php include("welcome.php") ?>
<div class="profile-part">

<div class="profile-info">

<!-- <img src="{$target_file}" alt="file not found" /></br> -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>PROFILE PICTURE</legend>

        <div class="profile-pic">
            <img src="<?php echo $target_file ?>" alt="">
        </div>
                Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>
  <input type="submit" value="Submit" name="submit">
<br>	
</fieldset>
	</form>
        
        
</div>

</div>
</div>


