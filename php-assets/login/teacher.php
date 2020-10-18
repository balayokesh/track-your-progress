<?php 

session_start();

include '../connection.php';

$facultyun = $_POST['faculty-name'];
$facultypwd = $_POST['faculty-password'];

$facultyun = stripcslashes($facultyun);
$facultypwd = stripcslashes($facultypwd);
$facultyun = mysqli_real_escape_string($con, $facultyun);
$facultypwd = mysqli_real_escape_string($con, $facultypwd);

$sql = "select * from faculties where facultyun = '$facultyun' and facultypwd = '$facultypwd'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count==1){
	$_SESSION['faculty-user'] = $facultyun;
	header("Location:../../teacher.php");
}
else {
	$_SESSION['msg'] = "Incorrect Faculty username or password";
	header ("Location:../../index.php");
}

