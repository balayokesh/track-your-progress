<?php 

session_start();

include '../connection.php';
$id = $_POST['idtoremove'];
$students = mysqli_num_rows(mysqli_query($con, "SELECT studentid FROM students WHERE studentid='$id'"));
if (mysqli_connect_errno()){
	echo 'error connecting to mysql';
}
else{
	if ($students == 0){
		$_SESSION['msg'] = "Id doesnt exist";
		header("location:../../head.php");		
	}
	else{
		mysqli_query($con, "DELETE FROM students WHERE studentid='$id'");
		$_SESSION['msg'] = "Student has been deleted successfully";
		header("location:../../head.php");
	}
}

