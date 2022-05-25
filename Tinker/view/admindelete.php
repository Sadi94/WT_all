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
  xhttp.open("POST", "../controller/rmvStoreOwnl.php", true);
  //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>

<label>Enter First Name which one you want delete</label><br>

  <input type="text" id="uname" onkeyup="showmyuser()">
  

<p id="mytext"></p>

<form action='../controller/rmvStoreOwnl.php' method='post'><br><br>
Nid : <input type='text' name='nid'>
    <h3><a href="../view/aduserdata.php"> |Back|</a></h3>
     <input name='delete' type='submit' value='Delete'> 
    
</form>

</body>
</html>

<?php

?>   
