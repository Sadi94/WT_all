function showemp() {
  
  var eid=  document.getElementById("eid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("thistext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("thistext").innerHTML = "not found";
	}
  };
  xhttp.open("POST", "../control/searchempprocess.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("eid="+eid);


}