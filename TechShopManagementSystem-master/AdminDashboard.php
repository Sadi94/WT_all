<?php
	include 'AdminHeader.php';
	require_once "Controller/AdminController.php";

?>
<!--dashboard starts -->
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					100
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					100
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					100
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>








<div class="center">
		<div class="form-group">
			<h4 class="text">Search Anything-:</h4>
			<input type="text" name="search" class="form-control" onkeyup="searchResult(this.value)">
			<?php /*echo $err_search;*/?>
		</div>
		<div class="form-group text-center">
		</div>
</div>
<div  class="center">
	<span id=""></span>
</div>







<div class="center">
	<h3 class="text">Results</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Sales Qty</th>
			<th>Sales Date</th>
		</thead>
		<tbody id="searchResults">
		</tbody>
	</table>
</div>


<script>
  function searchResult(str){
	console.log("Searching.....");
	var xhttp;
  	if (str == ""){
    	document.getElementById("searchResults").innerHTML = "";
    return;
  	}
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("searchResults").innerHTML = this.responseText;
    }
  };
  	xhttp.open("GET", "Controller/DashboardController.php?p="+str, true);
  	xhttp.send();
}
</script>
<!--dashboard ends -->
<?php
	include_once 'AdminFooter.php';
?>
