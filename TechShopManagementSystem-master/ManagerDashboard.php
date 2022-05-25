<?php
	session_start();
    if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])) {
        header("Location: login.php");
    }
	include 'ManagerHeader.php';
?>
<!--dashboard starts -->
<h1 class="text text-center">Welcome <?php echo $_SESSION["name"]?></h1>
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>100</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>100</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>100</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<h3 class="text">Recent Sales</h3>
	<table class="table table-striped">
		<thead>
			<th>Serial Number</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Sales Quantity</th>
			<th>Sales Date</th>
		</thead>
		<tbody>
			<td>XYZ1</td>
			<td>Asus Rog Zephyrus</td>
			<td>450,000</td>
			<td>32</td>
			<td>24.02.2020</td>
		</tbody>
	</table>
</div>
<!--dashboard ends -->
<?php include 'ManagerFooter.php';?>