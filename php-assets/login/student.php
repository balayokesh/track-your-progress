<?php 

session_start();

include '../connection.php';

$studentun = $_POST['student-name'];
$studentpwd = $_POST['student-password'];

$studentun = stripcslashes($studentun);
$studentun = mysqli_real_escape_string($con, $studentun);
$studentpwd = stripcslashes($studentpwd);
$studentpwd = mysqli_real_escape_string($con, $studentpwd);

$sql = "select * from students where studentun = '$studentun' and studentpwd = '$studentpwd'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count==1){
	$_SESSION['student-user'] = $studentun;
	header("Location:../../student.php");
}
else {
	$_SESSION['msg'] = "Incorrect student username or password";
	header ("Location:../../index.php");
}