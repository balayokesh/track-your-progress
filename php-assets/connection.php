<?php 
$host = "localhost";
$user = "root";
$password = "";
$db_name = "ecourse";

$con = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()){
	die("Failed to connect with mysql:". mysqli_connect_error());
	$_SESSION['msg'] = "Error connecting to database";
}