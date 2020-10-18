<?php 
	
session_start();

include 'connection.php';

$facultyname = $_SESSION['faculty-user'];
$assignment = $_POST['assignment'];
$deadline = $_POST['deadline'];

$sqlcheck = "SELECT * FROM tasks WHERE facultyname = '$facultyname'";
$sqlinsert = "INSERT INTO tasks(facultyname, assignment, deadline, completed) VALUES ('$facultyname', '$assignment', '$deadline', '-')";

// if (mysqli_num_rows(mysqli_query($con, $sqlcheck)) > 0 ){
// 	$_SESSION['msg'] = "Username already taken";
// 	header("location:../head.php");
// 	exit();
// }
if (mysqli_query($con, $sqlinsert)){
	$_SESSION['msg'] = "Account for " . $facultyun . " has been created successfully";	
	header("location:../teacher.php");
}
else {
	$_SESSION['msg'] = "Error connecting to database";
	echo "Error:" . $sqlinsert. "<br>" . mysqli_error($con);
}

