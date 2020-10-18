
<?php  
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TRACK YOUR PROGRESS | Teacher</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/0d1cdb6f90.js"></script>
</head>
<body>
	
	<header class="jumbotron jumbotron-fluid">
		<h1 class="col-8 text-center">
			<?php 
				echo "Welcome back " . $_SESSION['faculty-user'];
			?>
		
		<a href="php-assets/logout/teacher.php" title="LOG OUT"><i class="fa fa-sign-out"></i></a>
		</h1>
	</header>

	<main>
		<p>Post an assignment:</p>
		<form action="php-assets/post-assignment.php" method="post">
			<label>What is the assignment?</label>
			<input type="text" name="assignment">
			<br>
			<label>Please select a deadline: </label>
			<input type="datetime-local" name="deadline">
			<br>
			<input type="submit" value="Post Assignment" class="btn btn-primary">
		</form>

		<!-- Show all assignments -->
		<details>
			<summary>Show Assignments list:</summary>
			<p>Assignments list:</p>
			<table>
				<tr>
					<th>Assignment ID</th>
					<th>Faculty name</th>
					<th>Assignments</th>
					<th>Deadline</th>
					<th>posted time</th>
					<th>Completed students</th>
				</tr>
			<?php 
				include 'php-assets/connection.php';
				$tasks = mysqli_query($con, "SELECT * FROM tasks");
				while ($array = mysqli_fetch_row($tasks)){
					print "<tr> <td>";
			        echo $array[0]; 
			        print "</td> <td>";
			        echo $array[1]; 
			        print "</td> <td>";
			        echo $array[2]; 
			        print "</td> <td>";
			        echo $array[3]; 
			        print "</td> <td>";
			        echo $array[4]; 
			        print "</td> <td>";
			        echo $array[5]; 
			        print "</td> <tr>";
				};
			 ?>
			 </table>
		</details>
	</main>

	<footer> 
		<div class="bg-dark text-white text-center">
			Made with ❤ by team Tech_army
		</div>
	</footer>
</body>
</html>