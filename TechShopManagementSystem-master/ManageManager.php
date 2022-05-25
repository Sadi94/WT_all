<?php 
	include_once "AdminHeader.php";
	require_once "Controller/ManagerController.php";
	$managers = getAllManager();
?>


<div>
	<table  align="center">
    <tr><td><br><br><td></tr>
		<tr>
			<td>
				<div>
          <a href="AddManager.php" class="btn btn-primary">Add New Manager</a>

				</div>
			</td>
			<td>
				<div>
          <a href="AdminApproveReqManager.php" class="btn btn-primary">Approve Employee Request</a>
				</div>
			</td>
		</tr>
	</table>
</div>



<div class="center">
	<h3 class="text">Managers</h3>
	<table class="table table-striped">
		<thead>
      		<th>ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Salary</th>
		</thead>
		<?php
			foreach ($managers as $manager) {
				echo "<tr>";
				echo "<td>".$manager["id"]."</td>";
				echo "<td>".$manager["name"]."</td>";
				echo "<td>".$manager["username"]."</td>";
				echo "<td>".$manager["email"]."</td>";
				echo "<td>".$manager["phone"]."</td>";
				echo "<td>".$manager["salary"]."</td>";

				echo '<td><a href="EditManager.php?id='.$manager["id"].'" class="btn btn-success">Edit</a></td>';
				echo '<td><a href="DeleteManager.php?id='.$manager["id"].'" class="btn btn-danger">Delete</a></td>';

			}
		?>



	</table>
</div>
<!--dashboard ends -->
<?php 
	include_once 'AdminFooter.php';
?>
