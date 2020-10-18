<?php 

session_start();

include '../connection.php';
$id = $_POST['idtoremove'];
$faculties = mysqli_num_rows(mysqli_query($con, "SELECT facultyid FROM faculties WHERE facultyid='$id'"));
if (mysqli_connect_errno()){
	echo 'error connecting to mysql';
}
else{
	if ($faculties == 0){
		$_SESSION['msg'] = "Id doesnt exist";
		header("location:../../head.php");		
	}
	else{
		mysqli_query($con, "DELETE FROM faculties WHERE facultyid='$id'");
		$_SESSION['msg'] = "Faculty has been deleted successfully";
		header("location:../../head.php");
	}
}

