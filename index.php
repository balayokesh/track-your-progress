
<?php  
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TRACK YOUR PROGRESS | LOG IN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/0d1cdb6f90.js"></script>
</head>
<body class="bg-secondary">
	<!-- <span class="alert alert-dismissible d-flex justify-content-center bg-warning">
		<div class="close" data-dismiss="alert">&times;</div>
		<?php 
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg']; 
			}
		?>		
	</span> -->
	<header class="jumbotron jumbotron-fluid bg-dark text-white">
		<h1 class="text-center">TRACK YOUR PROGRESS</h1>
	</header>

	<main class="container-fluid">	

		<!-- card 1 -->
		<div class="row m-3 d-flex justify-content-center" >
			<div class="card col-md-3 m-3 bg-light" style="padding: 0">
				<div class="card-header text-center bg-dark text-white font-weight-bolder">Students</div>
				<div class="card-body">
					Are you a student, want to make you progress easily being traced by your instructor.  Log in from here.
				</div>
				<div class="card-link text-center">
					<form action="php-assets/login/student.php" method="post" class="form-group px-3">
						<input type="text" name="student-name" placeholder="Username" class="form-control" required>
						<br>
						<input type="password" name="student-password" placeholder="password" class="form-control" required>
						<br>
						<input type="submit" name="submit" value="Log in" class="btn btn-primary">
					</form>
				</div>
			</div>	

			<!-- card 2 -->
			<div class="card col-md-3 m-3 bg-light" style="padding: 0">
				<div class="card-header text-center bg-dark text-white font-weight-bolder">Teachers</div>
				<div class="card-body">
					Are you an instructor for set of students, want to track progress of your students, then log in by clicking here.
				</div>
				<div class="card-link text-center">
					<form action="php-assets/login/teacher.php" method="post" class="form-group px-3">
						<input type="text" name="faculty-name" placeholder="Username" class="form-control" required>
						<br>
						<input type="password" name="faculty-password" placeholder="password" class="form-control" required>
						<br>
						<input type="submit" value="Log in" class="btn btn-primary">
					</form>
				</div>
			</div>

			<!-- card 3 -->
			<div class="card col-md-3 m-3 bg-light" style="padding: 0">
				<div class="card-header text-center bg-dark text-white font-weight-bolder">Head of School/Department</div>
				<div class="card-body">
					Are you a Head of a school or an department, would like to manage set of faculties and students.  Log in here.
				</div>
				<div class="card-link text-center">
					<form action="php-assets/login/head.php" method="post" class="form-group px-3">
						<input type="text" name="admin-name" placeholder="Username" class="form-control" required>
						<br>
						<input type="password" name="admin-password" placeholder="password" class="form-control" required>
						<br>
						<input type="submit" value="Log in" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>	
	</main>

	<footer> 
		<div class="fixed-bottom bg-dark text-white text-center">
			Made with ❤ by team Tech_army
		</div>
	</footer>
</body>
</html>