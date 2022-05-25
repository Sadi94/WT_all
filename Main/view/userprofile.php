

 <div>

     <?php include("welcome.php") ?>
     <div class="profile-part">

     <div class="profile-info">

         <fieldset>
             <legend>PROFILE</legend>
             <?php
             echo "<h3>". "Name: " . $_SESSION['name'] . "</h3>";
             echo "<hr>" ;
             echo "<h3>". "Email: " . $_SESSION['email'] . "</h3>";
             echo "<hr>" ;
             echo "<h3>". "UserName: " . $_SESSION['user'] . "</h3>";
             echo "<hr>" ;
             echo "<h3>". "Gender: " . $_SESSION['gender'] . "</h3>";
             echo "<hr>" ;

            ?>
             </fieldset>
     </div>

     </div>
 </div>


