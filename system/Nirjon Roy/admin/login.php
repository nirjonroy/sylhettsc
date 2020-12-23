<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "user_massage");

$username = $_POST['username'];
$pass = $_POST['pass'];

$s = "SELECT * FROM admin WHERE username = '$username' && pass = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1) {
	$_SESSION['username'] = $username;
	
	header('location:admin.php');
}


else{

	header('location: index.php');
	echo "not found";
}
?>