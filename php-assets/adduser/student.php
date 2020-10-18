 <?php 

session_start();

include '../connection.php';

$studentun = $_POST['student-name'];
$studentmailid = $_POST['student-mail'];
$studentpwd = $_POST['student-password'];

$sqlcheck = "SELECT * FROM students WHERE studentun = '$studentun'";
$sqlinsert = "INSERT INTO students(studentun, studentmailid, studentpwd) VALUES ('$studentun', '$studentmailid', '$studentpwd')";

if (mysqli_num_rows(mysqli_query($con, $sqlcheck)) > 0 ){
	$_SESSION['msg'] = "Username already taken";
	header("location:../../head.php");
	exit();
}
elseif (mysqli_query($con, $sqlinsert)){
	$_SESSION['msg'] = "Account created successfully. Please login";
	header("location:../../head.php");
}
else {
	$_SESSION['msg'] = "Error connecting to database";
	echo "Error: " . $sqlinsert . "<br>" . mysqli_error($con);
}