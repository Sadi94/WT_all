<?php
	include 'AdminHeader.php';
	require_once "Controller/CategoryController.php";
	$categories = getAllCategories();	
?>
<head>
	<link rel="stylesheet" href="Styles/myStyle.css">
	<script src="JS/CategoryController.js"></script>
</head>
	<div class="center">
		<h3 class="text">All Categories</h3>
			<table class="table table-striped">
			<div>
				<input type="text" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="Search">
				<p id="suggestion"></p>
			</div>
				<thead>
					<th>Category Serial No</th>
					<th>Category Name</th>
				</thead>
				<?php
				foreach($categories as $category):
				?>
			<tbody>
				<td><?php echo $category["category_id"];?></td>
				<td><?php echo $category["category_name"];?></td>
				<td><a href="EditCategory.php?id=<?php echo $category['category_id'];?>" class="btn btn-success">Edit</a></td>
				<td><a href="Controller/CategoryDeleteController.php?id=<?php echo $category['category_id'];?>" class="btn btn-danger">Delete</a></td>
			</tbody>
				<?php
					endforeach;
				?>
			</table>
	</div>


<?php
	include 'AdminFooter.php';
?>
