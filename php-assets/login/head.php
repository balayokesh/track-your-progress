<?php

session_start();

include '../connection.php';

$adminun = $_POST['admin-name'];
$adminpwd = $_POST['admin-password'];

$adminun = stripcslashes($adminun);
$adminpwd = stripcslashes($adminpwd);
$adminun = mysqli_real_escape_string($con, $adminun);
$adminpwd = mysqli_real_escape_string($con, $adminpwd);

$sql = "select * from admin where adminun = '$adminun' and adminpwd = '$adminpwd'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count==1){
	$_SESSION['admin-user'] = $adminun;
	header("Location:../../head.php");
}
else {
	$_SESSION['msg'] = "Wrong Admin username or password";
	header('Location:../../index.php');
	exit();
}