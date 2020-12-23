<?php
require_once '../db_connection.php';
session_start();
$department = $_POST['department'];
$sesson = $_POST['sesson'];
$semister = $_POST['semister'];

$sql = "SELECT * FROM signup WHERE department = '$department' && sesson = '$sesson' && semister = '$semister' ";

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


?>