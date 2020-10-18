
<?php  
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TRACK YOUR PROGRESS | Head</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/0d1cdb6f90.js"></script>
</head>
<body style="user-select: none;">
	
	<header class="jumbotron jumbotron-fluid">
		<h1 class="col-8 text-center">
			<?php 
				echo "Welcome back " . $_SESSION['admin-user'];
			?>
		
		<a href="php-assets/logout/head.php" title="LOG OUT"><i class="fa fa-sign-out"></i></a>
		</h1>
	</header>

	<main class="m-3 p-3">

		<!-- Manage faculties -->
		<div>
			<p>Add faculties:</p>
			<form action="php-assets/adduser/faculty.php" method="post" class="form-group">
				<input type="text" name="faculty-name" placeholder="Username">
				<input type="email" name="faculty-mail" placeholder="e-mail">
				<input type="password" name="faculty-password" placeholder="password">
				<input type="submit" value="Add" class="btn btn-primary">
			</form>
			<p>Remove faculty:</p>
			 <form action="php-assets/deleteuser/faculty.php" method="post" class="form-group">
			 	<input type="number" name="idtoremove" placeholder="Enter Faculty Id here">
			 	<input type="submit" value="Remove" class="btn btn-primary">
			 </form>
			<details>
				<summary>Show Faculties list:</summary>
				<p>Faculty list:</p>
				<table class="table table-striped table-bordered">
					<tr>
						<th>Faculty No.</th>
						<th>Name</th>
						<th>Email id</th>
						<th>Password</th>
					</tr>
				<?php 
					include 'php-assets/connection.php';
					$faculties = mysqli_query($con, "SELECT * FROM faculties");
					while ($array = mysqli_fetch_row($faculties)){
						print "<tr> <td>";
				        echo $array[0]; 
				        print "</td> <td>";
				        echo $array[1]; 
				        print "</td> <td>";
				        echo $array[2]; 
				        print "</td> <td>";
				        echo $array[3]; 
				        print "</td> <tr>";
					};
				 ?>
				 </table>
			</details>
			
		</div>
		<hr>

		<!-- Manage students -->
		<div>
			<p>Add Students:</p>
			<form action="php-assets/adduser/student.php" method="post" class="form-group">
				<input type="text" name="student-name" placeholder="Username">
				<input type="email" name="student-mail" placeholder="e-mail">
				<input type="password" name="student-password" placeholder="password">
				<input type="submit" value="Add" class="btn btn-primary">
			</form>
			<p>Remove student:</p>
				 <form action="php-assets/deleteuser/student.php" method="post" class="form-group">
				 	<input type="number" name="idtoremove" placeholder="Enter Student ID here">
				 	<input type="submit" value="Remove" class="btn btn-primary">
				 </form>
			<details>
				<summary>Show Students list:</summary>
				<p>Students list:</p>
				<table class="table table-striped table-bordered">
					<tr>
						<th>Student ID</th>
						<th>Name</th>
						<th>Email id</th>
						<th>Password</th>
					</tr>
				<?php 
					include 'php-assets/connection.php';
					$students = mysqli_query($con, "SELECT * FROM students");
					while ($array = mysqli_fetch_row($students)){
						print "<tr> <td>";
				        echo $array[0]; 
				        print "</td> <td>";
				        echo $array[1]; 
				        print "</td> <td>";
				        echo $array[2]; 
				        print "</td> <td>";
				        echo $array[3]; 
				        print "</td> <tr>";
					};
				 ?>
				 </table>
			</details>
			
		</div>
	</main>

	<footer> 
		<div class="bg-dark text-white text-center">
			Made with ❤ by team Tech_army
		</div>
	</footer>
</body>
</html>