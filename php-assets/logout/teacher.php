<?php 

session_start();

if (isset($_SESSION['faculty-user'])){
	session_destroy();
	header("Location:../../index.php");
}
else {
	header("Location:../../index.php");
}