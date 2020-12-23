<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "system");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM student WHERE username = '$username' && password = '$password' ";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $username;
	header('location:resultedit.php');
}



else{
	header('location:signup.php');
}

?>
