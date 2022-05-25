
<?php include('../controller/userprofilechange.php'); ?>

 <div>

<?php include("welcome.php") ?>
<div class="profile-part">

<div class="profile-info">

    <fieldset>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ; ?>">
        <legend>PROFILE</legend>
        <?php
        // echo "<h3>". "Name: " . $_SESSION['name'] . "</h3>";
        // echo "<hr>" ;
        // echo "<h3>". "Email: " . $_SESSION['email'] . "</h3>";
        // echo "<hr>" ;
        // echo "<h3>". "UserName: " . $_SESSION['user'] . "</h3>";
        // echo "<hr>" ;
        // echo "<h3>". "Gender: " . $_SESSION['gender'] . "</h3>";
        // echo "<hr>" ;

       ?>
        <Label>Name: </Label>
       <input type="text" name="name" value="<?php
        echo $_SESSION['name'] ;?>">
        <hr>
        <Label>Email: </Label>
       <input type="text" name="email" value="<?php
        echo  $_SESSION['email'] ; ?>">
        <hr>
        <Label>PassWord: </Label>
       <input type="text" name="pass"value="<?php
        echo  $_SESSION['password'] ;?>">
        <hr>
        <Label>Gendar: </Label>
       <input type="text" value="<?php
        echo $_SESSION['gender'] ;?>">
        <hr>
       
    

    <input type="submit" value="Submit">
    
    
    
    </form>
        
        </fieldset>
</div>

</div>
</div>


