<?php
	include "AdminHeader.php";
	require_once "Model/db_config.php";
	require_once "Controller/AddEmployeeController.php";
	$employees = getAllEmployees();
?>


<div>
	<table  align="center">
    <tr><td><br><br><td></tr>
		<tr>
			<td>
				<div>
          <a href="AddEmployee.php" class="btn btn-primary">Add New Employee</a>
				</div>
		</tr>
	</table>
</div>



<div class="center">
	<h3 class="text">Employees</h3>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Position</th>
			<th>Salary</th>
			<th>Address</th>
			<th>E-mail</th>
			<th>Phone Number</th>
		</thead>


		<?php
			foreach ($employees as $employee) {
				echo "<tr>";
				echo "<td>".$employee["id"]."</td>";
				echo "<td>".$employee["name"]."</td>";
				echo "<td>".$employee["username"]."</td>";
				echo "<td>".$employee["position"]."</td>";
				echo "<td>".$employee["basic_salary"]."</td>";
				echo "<td>".$employee["eadd"]."</td>";
				echo "<td>".$employee["email"]."</td>";
				echo "<td>".$employee["phonenum"]."</td>";
				echo '<td><a href="editEmployee.php?id='.$employee["id"].'" class="btn btn-success">Edit</a></td>';
				echo '<td><a href="deleteEmployee.php?id='.$employee["id"].'" class="btn btn-danger">Delete</a></td>';

			}

		?>

	</table>
</div>
<!--dashboard ends -->
<?php include 'admin_footer.php';?>
