
function showmyuser() {
  var vid=  document.getElementById("vid").value;
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
  xhttp.open("POST", "/amardhaka/control/getvendor.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("vid="+vid);
}
$(document).ready(function(){
    $("button").click(function(){
      $("div").animate({
        left: '650px',
        height: '+=83px',
        width: '+=76px'
        
      });
    });
  });
