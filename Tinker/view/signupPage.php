<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/signup.css">
    
</head>
<body>

    <div class="topSection">
        <ul><li><a href="about.php" class='aboutPbl'>About</a></li>    
        <li><a href="contact.php" class='contactUs'>Contact Us</a></li>
       <li> <a href="Home.php" id="nav-cont">Home</a></li></ul>
        <h1 class='topTitle'>Tinker</h1>
        <h2 >- the Service you can trust</h2>
    </div>
   
    </div><br><br><br><br>
    <div class="reg">
        <h3>Click Registration to Start Journey With Us</h3>
        <div >
            <button class='reg-button button1'><a class="reg-button" href="../view/stOwnReg.php"><h3>Registration as a Store Owner</h3></a></button>       
        </div>
        <div class="cusReg">
            <button class='reg-button button2'><a class="reg-button" href="customerReg.php"><h3>Registration as a Customer</h3></a></button>
        </div>
        <div class="venReg">
            <button class='reg-button button3'><a class="reg-button" href="empReg.php"><h3>Registration as an Employee</h3></a></button>
        </div>
        <div><br>
            <a href="login.php" class="exist-login">Already have an account? Login</a>
            <br>
        </div>
    </div>
    
    <?php include '../include/footer.php'?>
</body>
</html>