<?php 

session_start();

$student = $_SESSION['student-user'];
include 'connection.php';
$id = $_POST['idtocomplete'];
$tasks = mysqli_num_rows(mysqli_query($con, "SELECT id FROM tasks WHERE id='$id'"));
if (mysqli_connect_errno()){
	echo 'error connecting to mysql';
}
else{
	if ($tasks == 0){
		$_SESSION['msg'] = "Assignment doesnt exist";
		header("location:../student.php");		
	}
	else{
		mysqli_query($con, "UPDATE tasks SET completed=concat(completed, '$student') WHERE id='$id'");
		$_SESSION['msg'] = "Assignment completed successfully";
		header("location:../student.php");
	}
}

