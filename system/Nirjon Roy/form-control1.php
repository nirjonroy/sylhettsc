<?php

$con = mysqli_connect('localhost', 'root', '', 'user_massage');

$name = $_POST['name'];
$location = $_POST['location'];
$massage = $_POST['massage'];
if(!$con){
	die('could not connect:' .mysqli_error());
}
else {
	
	$reg = "insert into info (name, location, massage) values ('$name', '$location', '$massage')";
	mysqli_query($con, $reg);
	echo "success";

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">back</a>
</body>
</html>
