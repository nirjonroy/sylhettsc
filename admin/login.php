<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "stscdiploma");
$usrname = $_POST['usrname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM admin WHERE usrname = '$usrname' && pass = '$pass' ";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1){

	$_SESSION['usrname'] = $usrname;
	header('location:admin.php');

}
else{
	header('location:index.php');
}


?>