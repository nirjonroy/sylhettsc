
<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:index.php");

}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<div class="container">
		<div class="col-md-11">
		</div>
		<div class="col-md-1">
			<button class="btn btn-danger">	<a href="logout.php"> logout</a></button>
		</div>
	</div>
</body>
</html>