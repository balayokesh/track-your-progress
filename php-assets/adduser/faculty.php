<?php 
	
session_start();

include '../connection.php';

$facultyun = $_POST['faculty-name'];
$facultymailid = $_POST['faculty-mail'];
$facultypwd = $_POST['faculty-password'];

$sqlcheck = "SELECT * FROM faculties WHERE facultyun = '$facultyun'";
$sqlinsert = "INSERT INTO faculties(facultyun, facultymailid, facultypwd) VALUES ('$facultyun', '$facultymailid', '$facultypwd')";

if (mysqli_num_rows(mysqli_query($con, $sqlcheck)) > 0 ){
	$_SESSION['msg'] = "Username already taken";
	// echo '<script>alert("username already taken");</script>';
	
	header("location:../../head.php");
	exit();
}
elseif (mysqli_query($con, $sqlinsert)){
	$_SESSION['msg'] = "Account for " . $facultyun . " has been created successfully";	
	header("location:../../head.php");
}
else {
	$_SESSION['msg'] = "Error connecting to database";
	echo "Error:" . $sqlinsert. "<br>" . mysqli_error($con);
}

