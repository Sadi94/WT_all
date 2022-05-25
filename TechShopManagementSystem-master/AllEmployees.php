<?php
    session_start();
	if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])) {
        header("Location: login.php");
    }
	include 'ManagerHeader.php';
	require_once "Controller/EmployeeController.php";
    $employees = getAllEmployees();
?>
<head>
	<link rel="stylesheet" href="Styles/myStyle.css">	
	<script src="JS/EmployeeController.js"></script>
</head>

	<div class="center">
		<h3 class="text">All Employees</h3>
			<table class="table table-striped">
			<div>
				<input type="text" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="Search">
				<p id="suggestion"></p>
			</div>
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Username</th>
					<th>E-mail</th>
					<th>Phone</th>
					<th>Salary</th>
				</thead>
				<?php
				foreach($employees as $employee):
				?>
			<tbody>
				<td><?php echo $employee["id"];?></td>
				<td><?php echo $employee["name"];?></td>
				<td><?php echo $employee["username"];?></td>
				<td><?php echo $employee["email"];?></td>
				<td><?php echo $employee["phone"];?></td>
				<td><?php echo $employee["salary"];?></td>
				<td><a href="EditEmployee.php?id=<?php echo $employee['id'];?>" class="btn btn-success">Edit</a></td>
				<td><a href="Controller/EmployeeDeleteController.php?id=<?php echo $employee['id'];?>" class="btn btn-danger">Delete</a></td>
			</tbody>
				<?php
					endforeach;
				?>
			</table>
	</div>
	
<?php include 'ManagerFooter.php';?>