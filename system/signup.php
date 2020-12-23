<?php

$conn = mysqli_connect("localhost", "root", "", "system");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM signup WHERE username = '$username' ";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1){
	echo "username is already taken";
}

if(empty($username)){
	echo "Please input your username";
}

else{
	$reg = "INSERT INTO signup (username, password) VALUES ('$username', '$password') ";
	mysqli_query($conn, $reg);
	echo "success";
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php include('include/header.php');?>
<div class="container">
	<div class="col-md-6">
<form action="signup.php" method="post">
	<div class="jumbotron" style="width: 100%; height: auto;  background: #806947; border-radius: 20px; color:#383e58; margin-top: 18%">
		<h2>Signup Form</h2>
		<input type="text" name="username" placeholder="Type your correct username" class="form-control"> <br/>
		<input type="password" name="password" placeholder="Type  your password" class="form-control">
		<input type="submit" name="submit" class="btn btn-danger">
		</div>
	</div>
</form>	
<div class="col-md-6">
	<form action="signup.php" method="post">
	<div class="jumbotron" style="width: 100%; height: auto;  background: #806947; border-radius: 20px; color:#383e58; margin-top: 18%">
			<h2>Login Form</h2>
		<input type="text" name="username" placeholder="Type your correct username" class="form-control"> <br/>
		<input type="password" name="password" placeholder="Type  your password" class="form-control">
		<input type="submit" name="submit" class="btn btn-danger">
		
	</div>
</form>	
</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>