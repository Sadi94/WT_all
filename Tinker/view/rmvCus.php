<?php
//include('../controller/log.php');
?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/info.css">
<body>
<h2><a href="Home.php"><img src="../src/t.png" alt=""></a></h2>

 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../controller/rmvCusl.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);
}

</script>
</head>

<label>Enter first name which one you want delete</label><br>

<input type="text" id="uname" onkeyup="showmyuser()">
  
<p id="mytext"></p>

<form action='../controller/rmvCusl.php' method='post'><br><br>
Nid : <input type='text' name='nid'   >
<br>
    <h3><a href="../view/aduserdata.php"> |Back|</a></h3>
     <input name='delete' type='submit' value='delete'>  
    
</form>
<?php include '../include/footer.php'?>
</body>
</html>

<?php

?>   