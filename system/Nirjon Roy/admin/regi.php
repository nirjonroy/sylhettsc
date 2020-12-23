<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "user_massage");


$username = $_POST['username'];
$pass = $_POST['pass'];

$s = "SELECT * FROM admin WHERE username = '$username' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1 ) {
	echo " the user name is already is already exesist";
}

else{
	$reg = "INSERT INTO admin (username, pass) VALUES ('$username', '$pass')";
	mysqli_query($con, $reg);
	echo "registration successful";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<form action="regi.php" method="post">
							<div class="input-group input-group-lg">
								
								<input type="text" class="form-control frm" name="username" placeholder="Type user Name"><br/><br/><br/><br/>
								<input type="Password" class="form-control frm" name="pass" placeholder="Type Password"><br/><br/><br/><br/>
								<input type="submit" name="" class="btn btn-info dropdown-toggle btn-group btn-group-lg" style="margin-left: 55%;">
							</div>	
						</form>	

</body>
</html>