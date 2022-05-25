
<!DOCTYPE html>
<html lang="en">
<head>
	<title align="center" > Contact</title>
	<link rel="stylesheet" href="../css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</head>
    <body>
    <ul>
        <li><a href="Home.php">Home Page</a></li>
        <li><a href="about.php">About</a></li>
        
            </ul>
    <div align="center">
        <h1>Contact..</h1>
        <div id="myDIV">
        <h2 ><img src="../src/location.png" alt=""> House No .TA 110/1, Gulshan Link Road, Dhaka 1212</h2>
        <h2 ><img src="../src/contact.jpg" alt=""> +880 1432-1754121</h2>
        <h2 ><img src="../src/email.png" alt=""> tinker@info.bd</h2> </div>
    <br>
       
    </div>
    </body>
    <div align="center">
    <button onclick="myFunction()">Hide/Show Contact</button></div>
    <?php 
        include "../include/footer.php";
      ?> 

</html>