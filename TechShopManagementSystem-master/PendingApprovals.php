<?php
    session_start();
	if (!isset($_SESSION["user"])) {
        header("Location: login.php");
    }
	include 'ManagerHeader.php';
	require_once "Controller/EmployeeController.php";
    $vacancies = getAllVacancies();
?>

	<div class="center">
		<h3 class="text">All Vacancies</h3>
			<table class="table table-striped">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Username</th>
					<th>E-mail</th>
					<th>Phone</th>
				</thead>
				<?php
				foreach($vacancies as $vacancy):
				?>
			<tbody>
				<td><?php echo $vacancy["id"];?></td>
				<td><?php echo $vacancy["name"];?></td>
				<td><?php echo $vacancy["username"];?></td>
				<td><?php echo $vacancy["email"];?></td>
				<td><?php echo $vacancy["phone"];?></td>
				<td><input type="submit" name="approve" value="Approve" class="form-control"></td>
				<td><input type="submit" name="remove" value="Remove" class="form-control"></td>
				<!-- <td><a href="EditEmployee.php?id=<?php echo $employee['id'];?>" class="btn btn-success">Edit</a></td>
				<td><a href="Controller/EmployeeDeleteController.php?id=<?php echo $employee['id'];?>" class="btn btn-danger">Delete</a></td> -->
			</tbody>
				<?php
					endforeach;
				?>
			</table>
	</div>
	
<?php include 'ManagerFooter.php';?>
